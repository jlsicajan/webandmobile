<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    /**
     * Show the form for web and mobile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    public function view_data(){
        print_r("for view data");die();
    }
}
