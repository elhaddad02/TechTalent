<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProjectsController extends Controller
{
    public function addProjects(Request $request){


        $user = Auth::user();

         $validatedData = $request->validate([
            'project_image' => 'required|max:255',
            'project_title' => 'required|string|max:255',
            'project_link' => 'required|url',
        ]);
        $path = $request->file('project_image')->store('public/photos');

        $creatorId = DB::select("SELECT id FROM creators WHERE user_id =  $user->id");

        DB::table('projects')->insert([
            'project_image' => $path ,
            'project_title' => $validatedData['project_title'],
            'project_link' => $validatedData['project_link'],
            'creators_id' => $creatorId[0]->id,
        ]);
        return view('skills');
    }
}
