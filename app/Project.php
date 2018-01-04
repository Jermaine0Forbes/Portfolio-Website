<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = "project";
    protected $relations = [
        'App\Image'
    ];
    protected $primaryKey = "pro_id";
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function framework(){

        return $this->hasMany( Framework::class,'pro_id');
    }

    public function getFrame(){

        return $this->framework()->select('framework')->get();
    }

    public function image(){

        // return $this->hasMany('App\Image', 'pro_id', 'pro_id');
        return $this->hasMany(Image::class,'pro_id');
        // return $this->hasMany(Image::class);
        // return $this->hasMany('App\Image');
    }

    public function mediumImage(){

        return $this->image()->select('image')->whereRaw('image like "%medium%" ')->get();
    }

    public function smallImage(){

        return $this->image()->select('image')->whereRaw('image like "%small%" ')->get();
    }
    

    public function library(){

        return $this->hasMany( Library::class,'pro_id');
    }

    public function getLibrary(){

        return $this->library()->select('library')->get();
    }

    public function language(){

        return $this->hasMany( MadeWith::class,'pro_id');
    }


    public function getLang(){

        return $this->language()->select('language')->get();
    }
}
