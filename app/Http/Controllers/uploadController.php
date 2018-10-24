<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

//    public function tinyUpload() {
//
//// reset($_FILES);
//// $image = current($_FILES);
//
//      
////         $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
////         $destinationPath = public_path('/images');
////         $image->move($destinationPath, $input['imagename']);
//        // echo json_encode(array('location' => $filetowrite));
//
//      // $packages->image = $input['imagename'];
//    	return view('backEnd.packages.visaProcessing');
//
//    }
    
    public function store()
{
   $imgpath = request()->file('file')->store('uploads', 'public'); 
   return response()->json(['location' => "/uploads/$imgpath"]);
}




}
