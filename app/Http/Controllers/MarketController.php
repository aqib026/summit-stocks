<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MarketController extends Controller
{
    public function index(){
        //eeb2d697583a3add8d4c7b38874a52bb
        //https://financialmodelingprep.com/api/v3/profile/AAPL,MSFT,MRVL,COUP,MTN,HQY,DADA,SFIX,ENIC,NAPA,GIII,BBCP,THCB,JFIN,NEXT?apikey=eeb2d697583a3add8d4c7b38874a52bb
        $url = 'https://financialmodelingprep.com/api/v3/profile/AAPL,MSFT,MRVL,COUP,MTN,HQY,DADA,SFIX,ENIC,NAPA,GIII,BBCP,THCB,JFIN,NEXT,ENOB,THCA,GSMG,PSTI,BSGM?apikey=eeb2d697583a3add8d4c7b38874a52bb';
        $stock_list = json_decode(file_get_contents($url));
        return Inertia::render('MarketEarningActivity',['stock_list' => $stock_list]);
    }

    public function show($symbol){

        $url = 'https://financialmodelingprep.com/api/v3/historical/earning_calendar/' . $symbol . '?limit=6&apikey=eeb2d697583a3add8d4c7b38874a52bb';
        $QuarterlyEarnings = json_decode(file_get_contents($url));

        $url = 'https://financialmodelingprep.com/api/v3/quote/' . $symbol . '?apikey=eeb2d697583a3add8d4c7b38874a52bb';
        $Summary = json_decode(file_get_contents($url));

        $url = 'https://financialmodelingprep.com/api/v3/profile/' . $symbol . '?apikey=eeb2d697583a3add8d4c7b38874a52bb';
        $Profile = json_decode(file_get_contents($url));

        
        return Inertia::render('MarketEarningActivityDetail',[  'symbol' => $symbol,
                                                                'QuarterlyEarnings' => $QuarterlyEarnings,
                                                                'SummaryData' => $Summary[0],
                                                                'Profile' => $Profile[0] ]);
    }

    public function history($symbol){
        $url = 'https://financialmodelingprep.com/api/v3/historical-price-full/'.$symbol.'?from=2021-04-01&to=2021-06-07&apikey=eeb2d697583a3add8d4c7b38874a52bb';
        $history = file_get_contents($url);
        return $history; 

    }

    public function majorIndexes(){

        $url = 'https://financialmodelingprep.com/api/v3/quote/%5EGSPC,%5EDJI,%5ENDX,%5ERUT,%5EFTSE,%5EN225?apikey=eeb2d697583a3add8d4c7b38874a52bb';
        $majorIndexes = file_get_contents($url);
        return $majorIndexes; 

    }

}
