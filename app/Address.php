<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
     protected $fillable = [
         "ip", 
         "screen_height",
         "screen_width",
         "path",
         "country",
         "region",
         "zip",
     ];

    protected $dates = ["created_at", "updated_at"];
}
