<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;
use App\Skill;
use App\Skillset;
use App\Framework;
use App\Library;
use App\MadeWith;
use App\Image;
use Carbon\Carbon;
use App\Project;
use App\Contact;

class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Dashboard";
        return view('admin',["Title" => $title]);
    }

    public function contact(){
        $contact = Contact::select("title","body")->latest()->first();
        $nothing = "nothing";
        $title = "Edit Contact Page";
        if(empty($contact)){
            $contact = (object)[];
            $contact->title = $nothing;
            $contact->body = $nothing;
        }
        $data_array = [
            "Title" => $title,
            "title" => $contact->title ,
            "body" => $contact->body
        ];

        return view("admin-contact",$data_array);
    }


    public function contactStore(Request $r){
        $contact  = new Contact;
        $contact->title = $r->title;
        $contact->body = $r->body;
        $contact->save();

        return redirect("/contact");

    }

    public function portfolioIndex(){

        $project = Project::orderBy('pro_id','desc')->get();
        $id = Project::orderBy('pro_id','desc')->pluck("pro_id")->first();
        $Title = "Edit Home Page";
        // dd($id);
        $num = $id+1;

        $data_array = [
            "Title" => $Title,
            "project" => $project,
            "new" => $num
        ];
        return view("admin-portfolio", $data_array);
    }


    public function portfolioPage($id){
        $project = Project::find($id);
        if(empty($project)){
            $Title = "Edit Home Page Number {$id}";

            $data_array = [
                "Title" => $Title,

            ];
            return view("admin-portfolio-new", $data_array);
        }else{

            $Title = "Edit Home Page Number {$id}";

            $data_array = [
                "Title" => $Title,
                "pro" => $project,

            ];
            return view("admin-portfolio-page", $data_array);

        }




    }
    public function portfolioPageStore( Request $r, $id){

        $frame_count = $r->framework_total;
        $lang_count = $r->language_total;
        $lib_count = $r->library_total;
        $med_count = $r->medium_total;
        $small_count = $r->small_total;

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

        for ($i=0; $i < $frame_count ; $i++) {
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


        for ($i=0; $i < $med_count ; $i++) {
             $num = $i+1;
            if(Image::where('image',$r->input("medium-{$num}"))->where("pro_id", $id)->exists()){

                $updated_data = [
                 "pro_id" => $id,
                 "image" => $r->input("medium-{$num}")
                ];

                Image::where('image',$r->input("medium-{$num}"))->where("pro_id", $id)->update($updated_data);

            }else{
               $data = new Image;
               $data->pro_id = $id;
               $data->image = $r->input("medium-{$num}");
               $data->save();
            }

        }


        for ($i=0; $i < $small_count ; $i++) {
             $num = $i+1;
            if(Image::where('image',$r->input("small-{$num}"))->where("pro_id", $id)->exists()){

                $updated_data = [
                 "pro_id" => $id,
                 "image" => $r->input("small-{$num}")
                ];

                Image::where('image',$r->input("small-{$num}"))->where("pro_id", $id)->update($updated_data);

            }else{
               $data = new Image;
               $data->pro_id = $id;
               $data->image = $r->input("small-{$num}");
               $data->save();
            }

        }




        return redirect("/");


    }

    public function skills(){
        // $skill  = Skill::latest()->select('title','summary')->get();
        $skill  = Skill::select('title','summary')->first();
        $set  = Skillset::get();
        $nothing = "nothing";
        $title = "Edit Skills Page";

        if(empty($skill)){
			$skill = (object)[];
			$skill->title = $nothing;
			$skill->summary = $nothing;

		}

        $data_array = [
            "Title"=> $title,
            "title"=>$skill->title,
            "summary"=>$skill->summary,
            "set" =>$set
        ];

        return view('admin-skills',$data_array);
    }


    public function skillsStore(Request $r){

        $counter = $r->row+1;
        $c = 1;
		$x = "name-{$c}";

        //dd($r->input($x));

        if(Skill::where('summary',$r->summary)->exists()) {

            $updated_data = [
                "title" => $r->title,
                "summary" => $r->summary
            ];

            Skill::where('summary',$r->summary)->update($updated_data);
        }else{

            $skill = new Skill;
            $skill->title = $r->title;
            $skill->summary = $r->summary;
            $skill->save();
        }




         for ($c; $c < $counter ; $c++) {
		 if( Skillset::where('name',$r->input("name-{$c}"))->exists() ){

                $updated_data = [
                "name" => $r->input("name-{$c}"),
                "rank" => $r->input("rank-{$c}"),
                "position" => $r->input("position-{$c}"),
                "year" => $r->input("year-{$c}"),
                "current" => $r->input("current-{$c}")

                ];

                Skillset::where('name',$r->input("name-{$c}"))->update($updated_data);

             }else{


                $set = new Skillset;
                $set->name = $r->input("name-{$c}");
                $set->rank = $r->input("rank-{$c}");
                $set->position = $r->input("position-{$c}");
                $set->year = new Carbon($r->input("year-{$c}"));
                $set->current = $r->input("current-{$c}");
                $set->save();
             }
         }


         return redirect('/skills');

    }

    public function about(){
        $data = About::latest()->first();
        $nothing = "";


		if(empty($data)){
			$data = (object)[];
			$data->title = (empty($data->title))?$nothing:$data->title;
			$data->summary = (empty($data->summary))?$nothing:$data->summary;
			$data->highlight = (empty($data->highlight))?$nothing:$data->highlight;
			$data->experience = (empty($data->experience))?$nothing:$data->experience;
			$data->image  = (empty($data->image ))?$nothing:$data->image ;
		}


		$data_array = [
		"summary"=>$data->summary,
		"title"=> $data->title,
		"highlight"=> $data->highlight,
		"experience"=> $data->experience,
		"image"=> $data->image,
        "Title"=> "Edit About Page"
		];

        return view('admin-about',$data_array);
    }

    public function aboutStore(Request $r){
        $data = new About;
        $data->title = $r->title;
        $data->summary = $r->summary;
        $data->highlight = $r->highlight;
        $data->experience = $r->experience;
        $data->image = $r->image;
        $data->save();

        return redirect('/about');
    }
}