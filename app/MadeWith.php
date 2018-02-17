<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MadeWith extends Model
{
    //
    protected $table = "madeWith";
    
    public static function saveLanguages($id,$lang_count,$r){
        
        for ($i=0; $i < $lang_count ; $i++) {
             $num = $i+1;
            if(MadeWith::where('language',$r->input("language-{$num}"))->where("pro_id", $id)->exists()){

                $updated_data = [
                 "pro_id" => $id,
                 "language" => $r->input("language-{$num}")
                ];

                MadeWith::where('language',$r->input("language-{$num}"))->where("pro_id", $id)->update($updated_data);

            }else{
               $data = new MadeWith;
               $data->pro_id = $id;
               $data->language = $r->input("language-{$num}");
               $data->save();
            }

        }

        
    }

    public function project(){

        return $this->belongsTo(Project::class);
    }
}
