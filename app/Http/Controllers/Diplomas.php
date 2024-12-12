<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Diplomas extends Controller
{

    
    public function store(Request $request)
    {
        // dd($request->diplome); //['diplome1', 'diplome2']   $request->diplome[0]

        $diplomes = $request->diplome;
        $etablissements = $request->etablissement;
        $dateFormations = $request->dateFormation;

        // $validatedData = $request->validate([
        //     'diplome.*' => 'required|string|max:255',
        //     'etablissement.*' => 'required|string|max:255', 
        //     'dateFormation.*' => 'nullable|date',
        // ]);

        $creatorId = DB::select('SELECT MAX(id) AS max_id FROM creators')[0]->max_id;

        // foreach ($diplomes as $key => $diplome){
        //     dd($diplomes);
            // DB::table('diplomas')->insert([
            //     'nom_diplomes' => $diplome[$key],
            //     'nom_etablissement' => $etablissement[$key],
            //     'date_formation' => $dateFormation[$key],
            //     'creators_id' => $creatorId,
            // ]);
        // }

        for($i=0; $i<count($diplomes); $i++){
            DB::table('diplomas')->insert([
                'nom_diplomes' => $diplomes[$i],
                'nom_etablissement' => $etablissements[$i],
                'date_formation' => $dateFormations[$i],
                'creators_id' => $creatorId,
            ]);
        }
        // return view('projects');
    }
    

}
