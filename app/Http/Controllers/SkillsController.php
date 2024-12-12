<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller{

    public function addSkills(Request $request){
    // $validationData = $request->validate([
    //     '$programmingLanguages' => 'required',
    //     '$frameworks' => 'required',
    //     '$softSkills' => 'required',
    //     '$languages' => 'required',
    // ]);
    $programmingLanguages = json_encode($request->input('programming_languages', []));
    $frameworks = json_encode($request->input('frameworks', []));
    $softSkills = json_encode($request->input('soft_skills', []));
    $languages = json_encode($request->input('languages', []));

    DB::table('skills')->insert([
        'programming_languages' => $programmingLanguages,
        'frameworks' => $frameworks,
        'soft_skills' => $softSkills,
        'languages' => $languages,
    ]);

    // DB::insert("INSERT INTO skills('programming_languages', 'frameworks', 'soft_skills', 'languages') 
    //         VALUES($programmingLanguages, $frameworks, $softSkills, $languages)");
    
    $id_skill = DB::select("SELECT id from skills ORDER BY id DESC LIMIT 1 ");

    $user = Auth::user();
    $id_creator = DB::select("SELECT id FROM creators WHERE user_id = $user->id");

    DB::table('creator_skill')->insert([
        'creator_id' => $id_creator[0]->id,
        'skill_id' => $id_skill[0]->id,
    ]);

    return view('portfolios');

    }

    
}
