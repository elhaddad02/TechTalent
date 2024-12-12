<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AllPortfolios extends Controller
{
    public function addTemplate(Request $r){

        $user = Auth::user();

        $mytemplate = $r->portfolios;

        // return($r->portfolios);
        // dd($r);

        $creator = DB::select("SELECT id, user_id FROM creators WHERE user_id = $user->id")[0]->id;

        DB::insert("INSERT INTO templates(`name`, `creators_id`) Values('$mytemplate', $creator)");
        return view('welcome');
    }

    
    public function editTemplateForm(){
        return view('editTemplate');
    }

    public function updateTemplate(Request $r){
        $user = Auth::user();
        $creator_id = DB::select("SELECT id FROM creators WHERE user_id = $user->id")[0];

        $new_portfolio = DB::update("UPDATE templates SET  `name`= '$r->portfolios' WHERE creators_id = $creator_id->id");

        

        return view('/welcome');

    } 
}
