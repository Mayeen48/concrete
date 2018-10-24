<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\packages;
use DB;


class PackageController extends Controller
{
     public function packageSetup() {
         // $data['countries'] = countries::orderBy('countryName', 'ASC')->get();
         $countries = DB::table('countries')->orderBy('countryName', 'ASC')->get();
         
         return view('backEnd.packages.packagesSetup', compact('countries'));
        // return view('',$pack);
    }
     public function packageShow() {
         $packages = DB::table('packages')->orderBy('pId', 'ASC')->get();
         return view('backEnd.packages.packagesShow', compact('packages'));
    }
    
     public function packageStore(Request $request) {
         
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
    public function packageDetailsStore(Request $request){
        $packages = new packages();
        $packages->description = $request->pAllData;
        DB::table('packages')
            ->where('pId', $request->pId)
            ->update(['description' => $request->pAllData]);
        return redirect('/packagesSetup')->with('message', "Package Setup Completed");
        
    }
    
    public function deletePackageSingle($id){
         $image = DB::table('packages')->where('pId', $id)->first();
        $file= $image->image;
         $filename = public_path().'/images/'.$file;
        if (file_exists($filename)) {
       @unlink($filename);
    }

//        
//        
        DB::table('packages')->where('pId', $id)->delete();
//
        return redirect('/packagesSetup')->with('message', "Package Deleted");
        
    }
    public function deletePackageFull($id){
         $image = DB::table('packages')->where('pId', $id)->first();
        $file= $image->image;
         $filename = public_path().'/images/'.$file;
        if (file_exists($filename)) {
       @unlink($filename);
    }
         DB::table('packages')->where('pId', $id)->delete();

        return redirect('/packagesShow')->with('message', "Package Deleted.... ");
        
    }
    
  public function packageDetails($id){
        $packages = DB::table('packages')->where('pId', $id)->first();
        return json_encode($packages);
//         $description= $packages->description;
//        return $description;
        
        
    }
  public function inquiriesShow(){
        $inquiries = DB::table('inquiries')->get();
        return view('backEnd.others.inquiries', compact('inquiries'));
    }
  
     public function deleteInquiries($id){
        DB::table('inquiries')->where('iId', $id)->delete();
        return redirect('/inquiriesShow')->with('message', "Inquiry Deleted... ");
        
    }
     public function ChengeStatus($id){
         $inquiries = DB::table('inquiries')->where('iId', $id)->first();
         $status= $inquiries->status;
         if($status==0){
             DB::table('inquiries')
            ->where('iId', $id)
            ->update(['status' => 1]);
         }else{
              DB::table('inquiries')
            ->where('iId', $id)
            ->update(['status' => 0]);
         }
        return redirect('/inquiriesShow');
        
    }
    
    
    public function ticketRequest(){
        $ticket_requests = DB::table('ticket_requests')->get();
        return view('backEnd.others.ticketRequest', compact('ticket_requests'));
    }
    public function ChengeTicketStatus($id){
         $ticketStatus = DB::table('ticket_requests')->where('trid', $id)->first();
         $status= $ticketStatus->status;
         if($status==0){
             DB::table('ticket_requests')
            ->where('trid', $id)
            ->update(['status' => 1]);
         }else{
              DB::table('ticket_requests')
            ->where('trid', $id)
            ->update(['status' => 0]);
         }
        return redirect('/ticketRequest');
        
    }
    
    public function deleteTicketRequest($id){
        DB::table('ticket_requests')->where('trid', $id)->delete();
        return redirect('/ticketRequest')->with('message', "Ticket Request Deleted... ");
        
    }
}
