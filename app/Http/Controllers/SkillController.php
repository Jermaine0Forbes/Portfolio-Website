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
    		"title" => $title,
    		"summary" => $summary,
    		"set" => $set,
    		"updated" => $updated,
    	];

        return view('custom-skills', $data);
    }
}
