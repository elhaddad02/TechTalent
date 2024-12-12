<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class Creators extends Controller{

    public function store(Request $request){
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'required',
            'email' => 'required|email|max:255',
            'birthday' => 'nullable|date',
            'adresse' => 'nullable|string|max:255',
            'metier' => 'required|string|in:Developpeur(se),designer',
            'service' => 'required|string',
            'role' => 'required|string',
            'note' => 'nullable|string',
        ]);

        $path = $request->file('picture')->store('public/photos');

        DB::table('creators')->insert([
            'name' => $validatedData['name'],
            'photo' => $path,
            'email' => $validatedData['email'],
            'date_naissance' => $validatedData['birthday'],
            'adresse' => $validatedData['adresse'],
            'metier' => $validatedData['metier'],
            'titre_professionnel' => $validatedData['service'],
            'rôle_actuel' => $validatedData['role'],
            'biographie' => $validatedData['note'],
            'user_id' => Auth::user()->id,
        ]);

        // return view('projects');
    }

    // afficher tous les createurs 
    public function selectProfiles(){
        $creators = DB::select("SELECT * FROM creators");
        return view('profilesCreators',compact('creators'));

    }

    //afficher les donnees du createur connecte dans un template d'un profile
    public function afficherData(){
        $user = Auth::user();

        $portfolios = DB::select("SELECT user_id FROM creators WHERE user_id = $user->id");


            if($portfolios){
                $data = DB::select("SELECT creators.*, projects.*, skills.*, users.* FROM creators
                    INNER JOIN projects ON creators.id = projects.creators_id
                    INNER JOIN creator_skill ON creators.id = creator_skill.creator_id
                    INNER JOIN skills ON creator_skill.skill_id = skills.id
                    INNER JOIN users ON users.id = creators.user_id
                    WHERE creators.user_id = $user->id"
                    );
                $diplomas = DB::select("SELECT diplomas.* , creators.id FROM diplomas 
                                    INNER JOIN creators on diplomas.creators_id = creators.id 
                                    Where creators.user_id =$user->id ");


                $template = DB::select("SELECT templates.*, creators.user_id From templates 
                                        INNER JOIN creators ON templates.creators_id = creators.id
                                        WHERE creators.user_id = $user->id ")[0]->name;
                // dd($data, $diplomas, $template);

                return view($template, compact('diplomas', 'data'));
               

            }else{
                return view('portfolioForm');
            }

    }

    public function editForm(){
        $user = Auth::user();
        // recuperer toutes les donnees pour les afficher les anciens valeurs dans les inputes

        $data = DB::select("SELECT creators.*, projects.*, skills.*, users.* FROM creators
                    INNER JOIN projects ON creators.id = projects.creators_id
                    INNER JOIN creator_skill ON creators.id = creator_skill.creator_id
                    INNER JOIN skills ON creator_skill.skill_id = skills.id
                    INNER JOIN users ON users.id = creators.user_id
                    WHERE creators.user_id = $user->id"
                    );
        $diplomas = DB::select("SELECT diplomas.* , creators.id FROM diplomas 
                    INNER JOIN creators on diplomas.creators_id = creators.id 
                    Where creators.user_id =$user->id ");


        return view('updatedForm', compact('diplomas', 'data'));
    }
    public function updatedForm(Request $r){
        $validatedData = $r->validate([
            // 'name' => 'required|string|max:255',
            'picture' => 'required',
            // 'email' => 'required|email|max:255',
            // 'birthday' => 'nullable|date',
            // 'adresse' => 'nullable|string|max:255',
            // 'metier' => 'required|string|in:Developpeur(se),designer',
            // 'service' => 'required|string',
            // 'role' => 'required|string',
            // 'note' => 'nullable|string',
            'project_image' => 'required|max:255',
            // 'project_title' => 'required|string|max:255',
            // 'project_link' => 'required|url',
        ]);


        $user = Auth::user();
        $id_creator = DB::select("SELECT id FROM creators where user_id = $user->id")[0]->id;

        // pour afficher les skills de l'utilisateur connecé et( foreign key 'skill_id' dans la table 'skill_creator')

        $skill_creator = DB::select("SELECT creators.id, creator_skill.*,  skills.* FROM creators 
                        INNER JOIN creator_skill ON creators.id = creator_skill.creator_id
                        INNER JOIN skills ON creator_skill.skill_id = skills.id
                        WHERE creators.user_id = $user->id ")[0]->skill_id;

        $programmingLanguages = json_encode($r->input('programming_languages', []));
        $frameworks = json_encode($r->input('frameworks', []));
        $softSkills = json_encode($r->input('soft_skills', []));
        $languages = json_encode($r->input('languages', []));


            $path = $r->file('picture')->store('public/photos');

            DB::update("UPDATE creators SET `name`='$r->name', `photo`= '$path', `email`='$r->email', `date_naissance`='$r->birthday', `adresse`='$r->adresse',
                                            `metier`='$r->metier', `titre_professionnel`='$r->service', `rôle_actuel`='$r->role', `biographie`='$r->note'
                                            WHERE id =$id_creator");

            $diplomes = $r->diplome;
            $etablissements = $r->etablissement;
            $dateFormations = $r->dateFormation;

            for($i=0; $i<count($diplomes); $i++){
                // return($r->diplome[$i]);

                DB::update("UPDATE diplomas SET `nom_diplomes`='$diplomes[$i]', `nom_etablissement`='$etablissements[$i]', `date_formation`='$dateFormations[$i]' WHERE creators_id = $id_creator");                        
            }
            $path_project = $r->file('project_image')->store('public/photos');

            DB::update("UPDATE projects SET `project_image`='$path_project', `project_title`='$r->project_title', `project_link`='$r->project_link' WHERE creators_id = $id_creator");
            
            DB::update("UPDATE skills SET `programming_languages`= '$programmingLanguages', `frameworks`= '$frameworks', `soft_skills`= '$softSkills', `languages`='$languages' WHERE id = $skill_creator ");
            return redirect('afficherData');
        
    }


    public function deletePortfolio(){


        DB::delete("DELETE ");


    }


}
