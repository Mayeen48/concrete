<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\slides;
use Illuminate\Support\Facades\Validator;
class SlideController extends Controller
{
     public function slideSetup() {
         $slides = DB::table('slides')->orderBy('sId', 'ASC')->get();
         return view('backEnd.others.slide', compact('slides'));
        
    }
    
     public function slideStore(Request $request) {
         $validation = Validator::make($request->all(), [
                    'title' => 'required',
                    'description' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:max_width=1680,max_height=945'
        ]);
         if ($validation->passes()) {
            $slides = new slides();
            $slides->title = $request->title;
            $slides->description = $request->description;
            $image = $request->file('image');
            $new_name = rand(). time(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/slides/'), $new_name);
            $slides->image = $new_name;
            $slides->save();
           return redirect('/slideSetup')->with('message', "Slide Setup Completed.....");
         }else{
            return redirect('/slideSetup')->with('message', "Title,Description and Image Required"
                    . "Image Size Must Be Less Than 1680X945");
         }
        
    }
    
     public function slideDelete($id){
         $slideCount = DB::table('slides')->get();
        $testCount= count($slideCount);
        if($testCount<=5){
            return redirect('/slideSetup')->with('message', "Slide Can Not Be Deleted Before 5 Item");
        } else {
         
         $image = DB::table('slides')->where('sId', $id)->first();
        $file= $image->image;
         $filename = public_path().'/images/slides/'.$file;
        if (file_exists($filename)) {
       @unlink($filename);
    }
         DB::table('slides')->where('sId', $id)->delete();

        return redirect('/slideSetup')->with('message', "Slide Deleted.... ");
        }
    }
    
    public function slideShow($id){
        $slides = DB::table('slides')->where('sId', $id)->first();
        return json_encode($slides);
        
        
    }
}
