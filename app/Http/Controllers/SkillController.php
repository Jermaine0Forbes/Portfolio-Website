<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;
use App\Skillset;

class SkillController extends Controller
{
    public function index(){

    	$skill = Skill::latest()->select("title","summary", "updated_at")->first();
    	// dd($skill);
    	$title = $skill->title;
    	$summary = $skill->summary;
    	$updated = $skill->updated_at;

    	$set = Skillset::where("hide",0)->get();

    	$data = [
    		"header" => $title,
    		"summary" => $summary,
    		"set" => $set,
    		"updated" => $updated,
        "keywords" => "React, PHP, Javascript, Laravel, ASP.net, MySQL",
        "title" => "Skills",
        "description" => "As a web developer here are the current skills I'm specializing in: React, Laravel, ASP.net, Node.js",
        "page" => "skills",
      ];

        return view('custom-skills', $data);
    }
}
