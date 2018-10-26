<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\galleries;
use Illuminate\Support\Facades\Validator;
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
         
            
            $validation = Validator::make($request->all(), [
                    'imageName' => 'required',
                    'aboutImage' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:max_width=600,max_height=450'
        ]);

        if ($validation->passes()) {
           $galleries = new galleries();
            $galleries->imageName = $request->imageName;
            $galleries->aboutImage = $request->aboutImage;
            
            $image = $request->file('image');
            $new_name = rand(). time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/galleries/'), $new_name);
            $galleries->image = $new_name;
            $galleries->save();
            return redirect('/gallery')->with('message', "Gallery Created Successfully.... ");
         } else {
            return redirect('/gallery')->with('message', "No Input cannot blunk and Image Size and Dimension Must be Limited"); 
         }
}

public function galleryDelete($id) {
  $image = DB::table('galleries')->where('gId', $id)->first();
        $file= $image->image;
         $filename = public_path().'/images/galleries/'.$file;
        if (file_exists($filename)) {
       @unlink($filename);
    }
         DB::table('galleries')->where('gId', $id)->delete();

        return redirect('/gallery')->with('message', "Gallery Deleted.... ");
}    
}