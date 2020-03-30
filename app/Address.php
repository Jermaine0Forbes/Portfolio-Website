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
         "city",
         "zip",
         "lat",
         "lon",
         "action",
         "description",
         "browser",
         "browser_version",
         "os",
         "os_version",
         "is_bot",
         "device_vendor",
         "device_brand",
     ];

    protected $dates = ["created_at", "updated_at"];
}
