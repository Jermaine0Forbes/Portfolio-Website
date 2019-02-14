<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        
        $c = Carbon::createFromDate(2022,4,17,"America/New_York");
        
        dd($c);
        
        return view('test');
    }
}
