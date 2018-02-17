<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Image extends Model
{
    //

    protected $primaryKey = 'id';
	
	private static $save_request;
	private static $save_id;
	private static $save_size;
    
    public static function saveImages($id, $med_count, $small_count, $r){
		
		 self::$save_request = $r;
         self::$save_id = $id;

		$str = "medium-";
		self::$save_size ="medium";
        Image::createRows($med_count, $str);
		
        $str = "small-";
		self::$save_size ="small";
        Image::createRows($small_count,$str);

    }
    
    public static function createRows($count,$str){
         $r = self::$save_request;
         $id = self::$save_id;
        for ($i=0; $i < $count ; $i++) {
             $num = $i+1;
			 $str = $str.$num;
             $result = str_is("default*",$r->input($str));
            
            if($result){
                Image::saveDefault($str);
                $i = $count;
            }else{
                Image::saveRegular($str);
            }
            

        }

    }
    
    
    public static function saveDefault($str){
		$r = self::$save_request;
        $id = self::$save_id;
		$size = self::$save_size;
        $data = new Image;
       $data->pro_id = $id;
       $data->size = $size;
       $data->image = $r->input($str);
       $data->save();
    }
    
    public static function saveRegular($str){
		$r = self::$save_request;
         $id = self::$save_id;
        
        if(Image::where('image',$r->input($str))->where("pro_id", $id)->exists()){

                $updated_data = [
                 "pro_id" => $id,
                 "image" => $r->input($str)
                ];

                Image::where('image',$r->input($str))->where("pro_id", $id)->update($updated_data);

            }else{
               Image::saveDefault($str);
            }

    }

    public function project(){

        return $this->belongsTo('App\Project');
    }
}
