<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    //
    public function GetHome (){
    	return view('admin.home');
    }
    
}
