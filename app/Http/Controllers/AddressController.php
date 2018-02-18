<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new Address();
        $add->ip = $request->ip();
        $add->path = $request->path;
        $add->screen_height = $request->height;
        $add->screen_width = $request->width;
         $add->country = $request->country;
         $add->zip = $request->zip;
         $add->region = $request->region;
         $add->city = $request->city;
        $add->save();
        
         $response = array(
            'status' => 'success',
            'msg' => 'ip created successfully',
        );
        
        return $response["msg"];
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
   
    }
    
     public function destroy(Address $address)
    {
        //
    }
}
    
        
