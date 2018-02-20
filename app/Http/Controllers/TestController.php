<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;

class TestController extends Controller
{
    public function index(){
        
        $d = request()->ip();
//        $d = GeoIP::getLocation($d);
        $d = geoip($d);
        dd($d);
        return view('test');
    }
}
