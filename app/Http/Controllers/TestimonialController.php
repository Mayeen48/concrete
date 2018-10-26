<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\testimonials;

class TestimonialController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function testimonial() {

        $testimonials = DB::table('testimonials')->orderBy('tId', 'ASC')->get();

        return view('backEnd.others.testimonial', compact('testimonials'));
    }

    public function store(Request $request) {


        $validation = Validator::make($request->all(), [
                    'name' => 'required',
                    'designation' => 'required',
                    'comments' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:max_width=200,max_height=200'
        ]);

        if ($validation->passes()) {
            $testimonials = new testimonials();
            $testimonials->name = $request->name;
            $testimonials->designation = $request->designation;
            $testimonials->comments = $request->comments;

            $image = $request->file('image');
            $new_name = rand() . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/testimonials/'), $new_name);
            $testimonials->image = $new_name;
            $testimonials->save();
            return redirect('/testimonial')->with('message', "testimonial Created Successfully.... ");
        } else {
            return redirect('/testimonial')->with('message', "No Input cannot blunk and Image Size and Dimension Must be Limited");
        }
    }

    public function testimonialDelete($id) {
        $test = DB::table('testimonials')->get();
        $testCount= count($test);
        if($testCount<=6){
            return redirect('/testimonial')->with('message', "If Testimonial is Less Then 6 You Can Not Delete Anyone");
        } else {
            $image = DB::table('testimonials')->where('tId', $id)->first();
        $file = $image->image;
        $filename = public_path() . '/images/testimonials/' . $file;
        if (file_exists($filename)) {
            @unlink($filename);
        }
        DB::table('testimonials')->where('tId', $id)->delete();

        return redirect('/testimonial')->with('message', "Testimonial Deleted.... ");
        }
        
    }

}
