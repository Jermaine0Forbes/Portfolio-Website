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

    protected $ignore = ["104.182.148.255", "75.30.183.73"];

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
        $geo = geoip($request->ip());

        if( in_array( $request->ip(), $this->ignore)){
             $response = "hello Jermaine";
        }else{

        $response = (empty($geo) == true)? $this->someData($request) :  $this->allData($request,$geo);

        }

        return $response;

    }

     public function allData($request,$geo){
         $add = new Address;
         $add->ip = $request->ip();
         $add->path = $request->path;
         $add->screen_height = $request->height;
         $add->screen_width = $request->width;
         $add->country = $geo->iso_code;
         $add->zip = $geo->postal_code;
         $add->region = $geo->state;
         $add->city = $geo->city;
         $add->save();


          return "all data stored";
     }

     public function someData($request){
          $add = new Address;
         $add->ip = $request->ip();
         $add->path = $request->path;
         $add->screen_height = $request->height;
         $add->screen_width = $request->width;
         $add->save();
         return "some data stored";
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
}//controller
