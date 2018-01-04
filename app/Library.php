<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table = "libraries";

    public function project(){

        return $this->belongsTo(Project::class);
    }
}
