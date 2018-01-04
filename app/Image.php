<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

    protected $primaryKey = 'id';

    public function project(){

        // return $this->belongsTo('App\Project', 'pro_id');
        // return $this->belongsTo('App\Project', 'pro_id',  'pro_id');
        return $this->belongsTo('App\Project');
    }
}
