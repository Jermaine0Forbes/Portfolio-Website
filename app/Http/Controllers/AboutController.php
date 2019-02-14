<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index(){
        $data = About::latest()->first();
		
		$data_array = [
		"summary"=>$data->summary, 
		"title"=> $data->title, 
		"highlight"=> $data->highlight, 
		"experience"=> $data->experience, 
		"image"=> $data->image, 
		];

        return view("about-page",$data_array);

        // return view('about');
    }
}
