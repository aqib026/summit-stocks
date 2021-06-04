<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Billing;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return Inertia::render('Auth/Register');
    }    
    public function create_leads()
    {
        // return Inertia::render('Auth/Register');
         return view('leads.app');
    }  
     
    public function save_lead(Request $request)
    {
        // return Inertia::render('Auth/Register');
        // dd($request->exp_year);



       $year=substr($request->exp_year,2);
       $request->validate([
            'subscription' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'address1' => 'required|max:255',
            'address2' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'country' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'phone_no' => 'required|max:255',
            'email_address' => 'required|max:255',
            'name_on_card' => 'required|max:255',
            'ccnumber' => 'required|max:255',
            'exp_month' => 'required|max:255',
            'exp_year' => 'required|max:255',
            'cvv' => 'required|max:255',
           
        ]);

        $user = User::create([
            'name' => $request->first_name.$request->last_name,
            'email' => $request->email_address,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'phone_no' => $request->phone_no,
            'name_on_card' => $request->name_on_card,
            'ccnumber' => $request->ccnumber,
            'exp_month' => $request->exp_month,
            'exp_year' => $request->exp_year,
            'cvv' => $request->cvv,
            'subscription' => $request->subscription,
            'type' => 'lead',
            // 'password' => Hash::make($request->password),
        ]);

       $xml ="<?xml version=”1.0” encoding=”UTF-8”?> 
            <UAPIRequest> 
             <transaction> 
            <process>online</process> 
            <type>authorization</type> 
             </transaction> 
             <requestData> 
            <orderId>SE_".$user->id."</orderId> 
            <orderAmount>".$request->subscription."</orderAmount> 
            <billing> 
            <billingFirstName>".$request->first_name."</billingFirstName> 
            <billingLastName>".$request->last_name."</billingLastName> 
            <billingAddressLine1>".$request->address1."</billingAddressLine1> 
            <billingCity>".$request->city."</billingCity> 
            <billingState>". $request->state."</billingState> 
            <billingZipCode>".$request->postal_code."</billingZipCode> 
            <billingCountry>".$request->country."</billingCountry> 
            <billingEmail>".$request->email_address."</billingEmail> 
            <billingPhone>".$request->phone_no."</billingPhone> 
            </billing> 
            <shipping> 
            <shippingFirstName>".$request->first_name."</shippingFirstName> 
            <shippingLastName>".$request->last_name."</shippingLastName> 
            <shippingAddressLine1>".$request->address1."</shippingAddressLine1> 
            <shippingAddressLine2>".$request->address2."</shippingAddressLine2> 
            <shippingCity>".$request->city."</shippingCity> 
            <shippingState>".$request->state."</shippingState> 
            <shippingZipCode>".$request->postal_code."</shippingZipCode> 
            <shippingCountry>".$request->country."</shippingCountry> 
            <shippingEmail>".$request->email_address."</shippingEmail> 
            <shippingPhone>".$request->phone_no."</shippingPhone> 
            </shipping> 
            <card> 
             <cardNumber>".$request->ccnumber."</cardNumber> 
            <cardExpiration>".$request->exp_month.$year."</cardExpiration> 
            <cardCVV>".$request->cvv."</cardCVV> 
            </card> 
            <card> 
            <currencyCode>840</currencyCode> 
             </requestData> 
            </UAPIRequest>";

            // <cardNumber>4457010000000009</cardNumber> 
            // <cardExpiration>0121</cardExpiration> 
            // <cardCVV>349</cardCVV> 
            // </card> 
            
            $xml = $xml; 
            $curl = curl_init(); 
            curl_setopt_array($curl, array( 
            CURLOPT_URL => "https://apidev.mojopay.com/universalapi", 
            CURLOPT_RETURNTRANSFER => true, 
            CURLOPT_ENCODING => "", 
            CURLOPT_MAXREDIRS => 10, 
            CURLOPT_TIMEOUT => 0, 
            CURLOPT_FOLLOWLOCATION => true, 
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
            CURLOPT_CUSTOMREQUEST => "POST", 
            CURLOPT_POSTFIELDS => $xml, 
            CURLOPT_HTTPHEADER => array( 
            "authorized: hfwwMUQiHsYX6kf828M2t8vF7AfocrAYlnbKUMaJseol8HFt", 
            "Content-Type: application/xml" 
            ), 
            )); 
            $response = curl_exec($curl); 
            curl_close($curl); 
            $xml = simplexml_load_string($response); 
            $namespaces = $xml->getNameSpaces(true);
            $objJsonDocument = json_encode($xml);
            $arrOutput = json_decode($objJsonDocument, TRUE);
            // $taleo = $xml->children($namespaces['processorResponse']);
            if($arrOutput['processorResponse']=='Approved'){

                $user= User::find($user->id);
                $user->type = 'customer';
                $user->save();

            $Billing = Billing::create([
            'user_id' => $user->id,
            'response' =>json_encode($arrOutput)
                  ]);

            }
            // print_r($arrOutput['processorResponse']);

// echo $xml;exit();
// exit();


    // dd($user);exit();

    return redirect('thanks/'.$user->id);
    }
      public function thanks($id)
    {
        // return Inertia::render('Auth/Register');
        // echo $id;exit();
         return view('leads.thank-you',['id'=>$id]);
    } 

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    } 
     public function update_experience(Request $request)
    {  
         
       
        $user= User::find($request->id);
        $user->experience = $request->experience;
        $user->save();
        // return redirect('/');
    }
}
