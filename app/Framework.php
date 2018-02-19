<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Framework extends Model
{
    //
    
    public static function saveFramework($id,$count,$r){
         for ($i=0; $i < $count ; $i++) {
             $num = $i+1;
            if(Framework::where('framework',$r->input("framework-{$num}"))->where("pro_id", $id)->exists()){

                $updated_data = [
                 "pro_id" => $id,
                 "framework" => $r->input("framework-{$num}")
                ];

                Framework::where('framework',$r->input("framework-{$num}"))->where("pro_id", $id)->update($updated_data);

            }else{
               $frame = new Framework;
               $frame->pro_id = $id;
               $frame->framework = $r->input("framework-{$num}");
               $frame->save();
            }

        }
    }

    public function project(){

        return $this->belongsTo(Project::class);
    }
}
