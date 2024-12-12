<?php

namespace App\Http\Controllers;
// use Barryvdh\DomPDF\Facade\Pdf;

// use Barryvdh\DomPDF\PDF;
use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $user = Auth::user();

        $creator_id = DB::select("SELECT id, user_id  FROM creators WHERE user_id = $user->id")[0]->id;

        $data = DB::select("SELECT creators.*, projects.*, skills.*, users.* FROM creators
            INNER JOIN projects ON creators.id = projects.creators_id
            INNER JOIN creator_skill ON creators.id = creator_skill.creator_id
            INNER JOIN skills ON creator_skill.skill_id = skills.id
            INNER JOIN users ON users.id = creators.user_id
            WHERE creators.user_id = $user->id"
        );
        $diplomas = DB::select("SELECT * FROM diplomas WHERE creators_id = $creator_id");
        
        $pdf = PDF::loadView('cvPdf', compact('data','diplomas'));
    
        return $pdf->download('cvPdf.pdf');
    
    }
}
