<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Library extends Model
{
    protected $table = "libraries";
    
    public static function saveLibraries($id,$lib_count,$r){
          for ($i=0; $i < $lib_count ; $i++) {
             $num = $i+1;
            if(Library::where('library',$r->input("library-{$num}"))->where("pro_id", $id)->exists()){

                $updated_data = [
                 "pro_id" => $id,
                 "library" => $r->input("library-{$num}")
                ];

                Library::where('library',$r->input("library-{$num}"))->where("pro_id", $id)->update($updated_data);

            }else{
               $data = new Library;
               $data->pro_id = $id;
               $data->library = $r->input("library-{$num}");
               $data->save();
            }

        }
    }

    public function project(){

        return $this->belongsTo(Project::class);
    }
}
