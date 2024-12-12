<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller
{
    public function afficherDetails($id){
        

        $data = DB::select("SELECT creators.*, projects.*, skills.*, users.* FROM creators
            INNER JOIN projects ON creators.id = projects.creators_id
            INNER JOIN creator_skill ON creators.id = creator_skill.creator_id
            INNER JOIN skills ON creator_skill.skill_id = skills.id
            INNER JOIN users ON users.id = creators.user_id
            WHERE creators.id = $id"
        );
        $diplomas = DB::select("SELECT * FROM diplomas WHERE creators_id = $id");

        $template = DB::select("SELECT templates.*, creators.user_id From templates 
        INNER JOIN creators ON templates.creators_id = creators.id
        WHERE creators.id = $id ")[0]->name;

        return view($template, compact('diplomas', 'data'));
        // dd($data, $diplomas);
    }
}
