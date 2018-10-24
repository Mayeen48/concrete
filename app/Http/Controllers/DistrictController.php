<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\districts;
use App\countries;
use DB;

class DistrictController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function districtSetup() {
        //$data=array();
        $countryDistricts = DB::table('districts')
                        ->join('countries', 'countries.cId', '=', 'districts.cId')->get();
        $countries = DB::table('countries')->orderBy('countryName', 'ASC')->get();

        return view('backEnd.others.districtSetup', compact('countryDistricts', 'countries'));
    }

    public function districtStore(Request $request) {

        if (districts::where('districtName', '=', $request->districtName)->exists() && districts::where('cId', '=', $request->cId)->exists()) {

            return redirect('/districtSetup')->with('message', "District Duplicated");
        } else {

            $districts = new districts();
            $districts->cId = $request->cId;
            $districts->districtName = $request->districtName;
            $districts->save();
            return redirect('/districtSetup')->with('message', "District Setup Completed");
        }
    }

    public function districtDelete($id) {

        DB::table('districts')->where('dId', $id)->delete();

        return redirect('/districtSetup')->with('message', "District Delete Successfully completed");
    }

}
