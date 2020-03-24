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
        return view('home',['projects'=>$project]);
    }
}
