<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index(){
        $about = About::latest()->first();

		$data = [
		"summary"=>$about->summary,
		"header"=> $about->title,
		"highlight"=> $about->highlight,
		"experience"=> $about->experience,
		"image"=> $about->image,
    "updated"=> $about->updated_at,
    "keywords" => "fullstack, PHP developer, Laravel, React developer",
    "title" => "About",
    "description" => "I am a fullstack developer that currently specializes in PHP, React, Javascript, and ASP.net",
    "page" => "about",
		];

        return view("about-page",$data);

        // return view('about');
    }
}
