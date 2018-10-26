<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\contacts;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactStore(Request $request) {
         $validation = Validator::make($request->all(), [
                    'firstName' => 'required',
                    'lastName' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'message' => 'required'
        ]);
         if ($validation->passes()) {
            $contacts = new contacts();
            $contacts->firstName = $request->firstName;
            $contacts->lastName = $request->lastName;
            $contacts->email = $request->email;
            $contacts->phone = $request->phone;
            $contacts->message = $request->message;
            $contacts->status = 0;
            $contacts->save();
           return response()->json([
                        'message' => 'Contact Form Submit Successfully Completed <br/>'
               . 'We will Contact with you Recently',
                        'class_name' => 'alert-success',
               'status'=>1
            ]);
         }else{
             return response()->json([
//                        'message' => $validation->errors()->all(),
                        'message' => 'Nmae, Email and Phone and Message is Required',
                        'class_name' => 'alert-danger',
                        'status'=>0
            ]);
         }
        
    }
    
    public function contacts(){
        $contacts = DB::table('contacts')->get();
        return view('backEnd.others.contacts', compact('contacts'));
    }
    
       public function ChengeStatus($id){
         $contacts = DB::table('contacts')->where('cId', $id)->first();
         $status= $contacts->status;
         if($status==0){
             DB::table('contacts')
            ->where('cId', $id)
            ->update(['status' => 1]);
         }else{
              DB::table('contacts')
            ->where('cId', $id)
            ->update(['status' => 0]);
         }
        return redirect('/contacts');
        
    }
    public function ContactDelete($id){
        DB::table('contacts')->where('cId', $id)->delete();
        return redirect('/contacts')->with('message', "Contact Information Deleted... ");
        
    }
}
