<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\countries;
use App\districts;
use DB;

class CountryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function countrySetup() {
//     $data['countries'] = countries::all();
        $data['countries'] = countries::orderBy('countryName', 'ASC')->get();
        return view('backEnd.others.countrySetup', $data);
    }

    public function countryStore(Request $request) {
        if (countries::where('countryName', '=', $request->country)->exists()) {
            return redirect('/countrySetup')->with('message', "Country Duplicated");
        } else {
            $countries = new countries();
            $countries->countryName = $request->country;
            $countries->save();
            return redirect('/countrySetup')->with('message', "Country Setup Completed");
        }
    }

    public function countryDelete($id) {

        //DB::table('countries')->where('cId',$id)->delete();


        if (districts::where('cId', '=', $id)->exists()) {
            DB::table('districts')->where('cId', $id)->delete();
            DB::table('countries')->where('cId', $id)->delete();
        } else {
            DB::table('countries')->where('cId', $id)->delete();
        }
        
        return redirect('/countrySetup')->with('message', "Country Delete Successfully completed with Destrict if Any");
    }

}
