<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Mail\mailSent;
use App\Mail\sendMark;

class ContactController extends Controller
{
    //
    
    protected $m;
    
    public function index(){

    	return view("contact");
    }
    
    
    public function send(Request $r){
        $data =[
            "subject" => $r->subject,
            "email" => $r->email,
            "body" => $r->message
        ];
        
        $this->m = $data;
        
        Mail::send(new sendMark($data));
        
//        Mail::send(new mailSent($data));
        
        
//        Mail::send("email.test",$data,function($message){
//             $message->to('jermaine0forbes@gmail.com', "jermaine forbes")
//            ->subject($this->m["subject"]);
//            $message->from($this->m["email"]);
//        });
        
        return redirect("/");
    }
}
