<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function HomeMain(){
        
        return view('frontend.index');


    }//End Method
}
