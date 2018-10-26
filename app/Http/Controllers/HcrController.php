<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\hcr;
class HcrController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    
    public function hcr() {
        
        $hcr = DB::table('hcrs')->get();

        return view('backEnd.others.hcr', compact('hcr'));
    }
    public function hcrSetup(Request $request) {
        $hcr = new hcr();
        $hcr->hId = $request->hId;
        $hcr->happyClient = $request->happyClient;
        $hcr->rating = $request->rating;
        DB::table('hcrs')
            ->where('hId', $request->hId)
            ->update(['happyClient' => $request->happyClient,'rating'=>$request->rating]);
        return redirect('/hcr')->with('message', "Happy Client and Ratings Setup Completed");

    }
}
