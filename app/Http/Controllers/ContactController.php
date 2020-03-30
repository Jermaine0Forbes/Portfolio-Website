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

      $data = [
        "keywords" => "Contact page, Connect with me, Email me",
        "title" => "Contact",
        "description" => "If you like some of my work and want to contact me here is the page to do so",
        "page" => "contact",
      ];

    	return view("contact", $data);
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


    public function preview(){

        $data =[
            "subject" => "this is a subject",
            "email" => "skivac3@gmail.com",
            "body" => "this is a body"
        ];

        // $mail = new sendMark(view(), config("mail.markdown"));
        // dd($mail);
        // // return $mail->render('email.mark');

       $mail = new sendMark($data);
       $mail = $mail->build();
       return $mail->buildView()["html"];


    }

}// end of class
