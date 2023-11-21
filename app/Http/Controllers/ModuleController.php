<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $currentYear = date('Y');
        $startYear = 1990;
        $years = range($currentYear, $startYear);
    
        return view('welcome', compact('years'));
    }
    public function TraitementForm(Request $request)
    {
        $allTitles = ['Enseignement', 'Encadrement', 'Comité de Lecture', 'Publication', 'Poste occupé', 'Projet de Recherche'];

        $selectedTitles = $request->input('titles', []);

        if (empty($selectedTitles)) {
            $selectedTitles = $allTitles;
        }

        return view('report', ['selectedTitles' => $selectedTitles]);
    }
    public function viewReport(Request $request)
    {
        $selectedTitles = $request->input('selectedTitles', []);

        return view('view-report', ['selectedTitles' => $selectedTitles]);
    }

}
