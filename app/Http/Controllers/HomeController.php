<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $project = Project::orderBy('updatedAt','desc')->where("visible", "=", "1")->limit(10)->get();
		//dd($project);
        // $project = Project::orderBy('pro_id','desc')->get();
        //$project = Project::orderBy('pro_id','desc')->where("visible", "=", "1")->limit(10)->get();
        //$project = Project::orderBy('pro_id','desc')->limit(10)->get();
        //dd($project);

        $data = [
          'projects'=> $project,
          "keywords" => "Web Developer, Portfolio, Frontend developer, Fullstack developer",
          "title" => "Home",
          "description" => "Hello, my name is Jermaine Forbes and I am a fullstack developer that specializes in PHP, React, Javascript, and ASP.net",
          "page" => "home",
      ];
        return view('home',$data);
    }

    public function getNames(){
      $project = Project::select("name")->orderBy('updatedAt','desc')->where("visible", "=", "1")->limit(10)->pluck("name");

      return response()->json(["data" => $project]);
      // return response()->json(["data" => "foo"]);
    }
}
