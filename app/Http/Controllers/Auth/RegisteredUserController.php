<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        // dd($request->all());
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
            'type' => 'lead',
            // 'password' => Hash::make($request->password),
        ]);


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
