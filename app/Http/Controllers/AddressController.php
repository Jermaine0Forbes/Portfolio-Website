<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Browser;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // protected $ignore = [];
    protected $ignore = ["104.182.148.255", "75.30.183.73"];





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeVisit(Request $request)
    {   $ip = $request->ip();
        $geo = geoip($ip);
        $ignoreAddress = in_array( $ip, $this->ignore);
        $data = $this->storeAddress($request, $geo);

        if(empty($geo)) return response()->json("there is something wrong with geolocation");

        if( $ignoreAddress){
             return response()->json($data);

        }
        // else{
        //
        // $response = (empty($geo) == true)? $this->someData($request) :  $this->allData($request,$geo);
        //
        // }
       Address::create($data);

        return response()->json("data saved");

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


        //  return "all data stored";
     }

     public function storeAddress($request, $geo){
        return [
          "ip" => $request->ip(),
          "path" => $request->path,
          "screen_height" => $request->height,
          "screen_width" => $request->width,
          "country" => $geo->iso_code,
          "zip" => $geo->postal_code,
          "region" => $geo->state,
          "city" => $geo->city,
          "lat" => $geo->lat,
          "lon" => $geo->lon,
          "action" => $request->action,
          "description" => $request->description,
          "browser" => Browser::browserFamily(),
          "browser_version" => Browser::browserVersion(),
          "os" => Browser::platformFamily(),
          "os_version" => Browser::platformVersion(),
          "is_bot" => Browser::isBot(),
          "device_vendor" => Browser::deviceFamily(),
          "device_brand" => Browser::deviceModel(),
        ];
     }

}//controller
