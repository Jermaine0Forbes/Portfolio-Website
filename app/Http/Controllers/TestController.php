<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use App\Image;

class TestController extends Controller
{
    public function index(){
        $arr = ["size"=>"medium","pro_id"=>8];
//        $d = Image::where($arr)->count();
//        $d = empty($d);
        $d = Image::select("id")->where($arr)->pluck("id");
        dd($d[0]);

        // $c = Carbon::createFromDate(2022,4,17,"America/New_York");
        //
        // dd($c);
        return view('test');
    }
}
