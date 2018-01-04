<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        // $this->middleware('checkAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function about(){
        $data = About::get();
        $nothing = "";
        $data->body = (empty($data->body))?$nothing:$data->body;
        $data->title = (empty($data->title))?$nothing:$data->title;

        return view('admin-about',["content"=>$data->body, "title"=> $data->title ]);
    }

    public function aboutStore(Request $r){
        $data = new About;
        $data->title = $r->title;
        $data->body = $r->body;
        $data->save();

        return redirect('/about');
    }
}
