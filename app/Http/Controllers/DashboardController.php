<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
//        public function __construct()
//    {
//        $this->middleware('auth');
//    }
   public function index()
    {
       if(auth()->user()){
                   return view('backEnd.dashboard.dashboard');

       }  else {
           return redirect('/');    
       }
    }
   
}
