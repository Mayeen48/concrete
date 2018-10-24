<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\countries;
use DB;

class AjaxController extends Controller
{
    public function tour($id){
        $data['countries'] = countries::orderBy('countryName', 'ASC')->get();
      return view('backEnd.packages.tour',$data);
   }
    public function hajjAndOmra($id){
      return view('backEnd.packages.hajjOmra');
   }
    public function airTicketing($id){
      return view('backEnd.packages.airTicketing');
   }
    public function hotelBooking($id){
      return view('backEnd.packages.HotelBooking');
   }
    public function visaProcessing($id){
      return view('backEnd.packages.visaProcessing');
   }
    public function getDistrict($id){
      $districts = DB::table('districts')->where('cId', $id)->get();
      return view('backEnd.packages.getDistrict',compact('districts'));
   }
}
