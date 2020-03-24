<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{

    protected $table = "project";
    protected $relations = [
        'App\Image'
    ];
    protected $primaryKey = "pro_id";
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    
    public static function saveProject($id,$r){
        
        if (Project::where("pro_id",$id)->exists()) {
            $updated_data = [
                "name" => $r->name,
                "summary" => $r->summary,
                "createdAt" => new Carbon($r->created),
                "stamp" => new Carbon(),
                "code" => $r->code,
                "link" => $r->link
            ];

            Project::where("pro_id",$id)->update($updated_data);
        }else{

            $data = new Project;
            $data->pro_id = $id;
            $data->name = $r->name;
            $data->summary = $r->summary;
            $data->createdAt = new Carbon($r->created);
            $data->code = $r->code;
            $data->link = $r->link;
            $data->save();
        }
    }

    public function framework(){

        return $this->hasMany( Framework::class,'pro_id');
    }

    public function getFrame(){

        return $this->framework()->select('framework')->get();
    }

    public function image(){

        return $this->hasMany(Image::class,'pro_id');
    }

    public function mediumImage(){
        
        $data = $this->image()->select('image')->where("size","medium")->get();
        $result = (empty($data) == true)? [false] : $data;
	
        return $data;
    }

    public function smallImage(){
        
        $data = $this->image()->select('image')->where("size","small")->get();
        $result = (empty($data) == true)? [false] : $data;

        return $data;
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
