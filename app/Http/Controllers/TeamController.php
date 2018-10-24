<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;
use DB;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller {

    public function teamCreate() {

        return view('backEnd.others.teamCreate');
    }

    public function teamShow() {
        $teams = DB::table('teams')->orderBy('tId', 'ASC')->get();
        return view('backEnd.others.teamShow', compact('teams'));
    }

    public function teamStore(Request $request) {

        $validation = Validator::make($request->all(), [
                    'pName' => 'required',
                    'mName' => 'required',
                    'mEmail' => 'required',
                    'fLink' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=300,height=400'
        ]);

        if ($validation->passes()) {
            $team = new team();
            $team->pName = $request->pName;
            $team->mName = $request->mName;
            $team->mPhone = $request->mPhone;
            $team->mEmail = $request->mEmail;
            $team->fLink = $request->fLink;
            $team->tLink = $request->tLink;
            $team->gLink = $request->gLink;

            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/members/'), $new_name);
            $team->image = $new_name;
            $team->save();
            return response()->json([
                        'message' => 'Member Upload Successfully',
                        'class_name' => 'alert-success',
                         'status'=>1
            ]);
        } else {
            return response()->json([
                        'message' => $validation->errors()->all(),
                        'class_name' => 'alert-danger',
                         'status'=>0
            ]);
        }
    }
   
    public function teamDelete($id){
         $image = DB::table('teams')->where('tId', $id)->first();
        $file= $image->image;
         $filename = public_path().'/images/'.$file;
        if (file_exists($filename)) {
       @unlink($filename);
    }
         DB::table('teams')->where('tId', $id)->delete();

        return redirect('/teamShow')->with('message', "Team member Deleted.... ");
        
    }
}
