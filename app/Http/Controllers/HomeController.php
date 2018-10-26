<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\visitors;
use App\slides;
class HomeController extends Controller {
   
    public function index() {
         $ip=$_SERVER['REMOTE_ADDR'];
     date_default_timezone_set("Asia/Dhaka");
 	 $today = date("Y-m-d");
         $visitorTest = DB::table('visitors')->where('ip', $ip)->where('date',$today)->get();
        $ipCount=count($visitorTest);

        if($ipCount==0){
         $visitors= new visitors();
         $visitors->ip = $ip;
         $visitors->date = $today;
         $visitors->save();
     	}

        $allIpSearch = DB::table('visitors')->get();
        $countAll = count($allIpSearch);
        $singleIP = DB::table('visitors')->select('ip', 'date')->where('date', $today)->get();
        $countSingle = count($singleIP);
        
        $slides = DB::table('slides')->orderBy('sId', 'DESC')->take(5)->get();
        $hcrs = DB::table('hcrs')->orderBy('hId', 'ASC')->get();
        $testimonials = DB::table('testimonials')->orderBy('tId', 'ASC')->get();
        $teams = DB::table('teams')->orderBy('tId', 'ASC')->get();
        $galleries = DB::table('galleries')->orderBy('gId', 'ASC')->get();
        return view('frontEnd.welcome', compact('teams','galleries','countAll','countSingle','testimonials','hcrs','slides'));
    }

}
