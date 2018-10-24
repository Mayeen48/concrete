<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\inquiry;
use App\ticket_request;
use Illuminate\Support\Facades\Validator;
class Packages extends Controller
{
    public function packageCallByType($id){
       $packages = DB::table('packages')->where('packageType', $id)->take(12)->get();
      
        return view('frontEnd.includes.packages', compact('packages'));
       
    }
    
       public function inquiry(Request $request) {
         $validation = Validator::make($request->all(), [
                    'pId' => 'required',
                    'iName' => 'required',
                    'iEmail' => 'required',
                    'iContact' => 'required'
        ]);
         if ($validation->passes()) {
            $inquiries = new inquiry();
            $inquiries->pId = $request->pId;
            $inquiries->iName = $request->iName;
            $inquiries->iEmail = $request->iEmail;
            $inquiries->iContact = $request->iContact;
            $inquiries->iCountry = $request->iCountry;
            $inquiries->iMessage = $request->iMessage;
            $inquiries->status = 0;
           // return $request->iMessage;
            $inquiries->save();
           return response()->json([
                        'message' => 'Inquiry Submit Successfully Completed <br/>'
               . 'We will Contact with you Recently',
                        'class_name' => 'alert-success',
               'status'=>1
            ]);
         }else{
             return response()->json([
//                        'message' => $validation->errors()->all(),
                        'message' => 'Nmae, Email and Contact Number is Required',
                        'class_name' => 'alert-danger',
                        'status'=>0
            ]);
         }
        
    }
       public function airTicket(Request $request) {
         $validation = Validator::make($request->all(), [
                    'departure' => 'required',
                    'destination' => 'required',
                    'depDate' => 'required',
                    'desDate' => 'required',
                    'trip' => 'required',
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'person' => 'required'
        ]);
         if ($validation->passes()) {
            $ticket_request = new ticket_request();
            $ticket_request->departure = $request->departure;
            $ticket_request->destination = $request->destination;
            $ticket_request->depDate = $request->depDate;
            $ticket_request->desDate = $request->desDate;
            $ticket_request->trip = $request->trip;
            $ticket_request->name = $request->name;
            $ticket_request->email = $request->email;
            $ticket_request->phone = $request->phone;
            $ticket_request->person = $request->person;
            $ticket_request->status = 0;
            $ticket_request->save();
           return response()->json([
                        'message' => 'Request Submit Successfully Completed <br/>'
               . 'We will Contact with you Recently',
                        'class_name' => 'alert-success',
               'status'=>1
            ]);
         }else{
             return response()->json([
//                        'message' => $validation->errors()->all(),
                        'message' => 'All Fields are Required',
                        'class_name' => 'alert-danger',
                        'status'=>0
            ]);
         }
        
    }
}
