<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $teams = DB::table('teams')->orderBy('tId', 'ASC')->get();
        return view('frontEnd.welcome', compact('teams'));
    }

}
