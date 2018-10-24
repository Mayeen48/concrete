<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class galleryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
         $galleries = DB::table('galleries')->orderBy('gId', 'ASC')->get();
         return view('backEnd.others.gallery', compact('galleries'));
    }
    public function galleryStore(Request $request) {
         
            $packages = new packages();
            $packages->cId = $request->pCountry;
            $packages->dId = $request->pDistrict;
            $packages->packageName = $request->pName;
            $packages->packageType = $request->packageType;
            $packages->trip = $request->pTrip;
            $packages->price = $request->pPrice;
            $packages->regDeadline = $request->pDeadline;
            
            
             $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

      $packages->image = $input['imagename'];

            $packages->save();
            $imgUrl=$input['imagename'];
            $packages = DB::table('packages')->orderBy('pId', 'ASC')->get();
            return view('backEnd.packages.packagesDetailsForm', compact('packages','imgUrl'))->with('message', "Package Setup Completed");
            
//           return redirect('/packagesDetailsForm',compact('packages','imgUrl'))->with('message', "Package Setup Completed");
       
    }
}
