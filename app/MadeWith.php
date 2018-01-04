<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MadeWith extends Model
{
    //
    protected $table = "madeWith";

    public function project(){

        return $this->belongsTo(Project::class);
    }
}
