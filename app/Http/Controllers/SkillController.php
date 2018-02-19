<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;
use App\Skillset;

class SkillController extends Controller
{
    public function index(){

    	$skill = Skill::latest()->select("title","summary")->first();
    	// dd($skill);
    	$title = $skill->title;
    	$summary = $skill->summary;

    	$set = Skillset::get();

    	$data = [
    		"title" => $title,
    		"summary" => $summary,
    		"set" => $set
    	];

        return view('custom-skills', $data);
    }
}
