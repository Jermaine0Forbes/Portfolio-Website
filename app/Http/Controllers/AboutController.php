<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index(){
        $data = About::select('title','body')->latest()->first();

        return view("page",["body" => $data->body, "title"=>$data->title]);

        // return view('about');
    }
}
