<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuteurController extends Controller
{
    public function index()
    {   
        $nombre=Auteur::all()->count();
        return view('admin/auteurs')->with('nombre',$nombre);
    }
    public function store(Request $request)
    {
        if (DB::table('auteurs')->where('Nom', $request->nom)->where('Prenom', $request->prenom)->exists()) {
            return redirect()->back()->with('auteurExist', 'Désolé, cet auteur exise déjà !');
        } else {
            DB::table('auteurs')->insert([
                'Nom' => $request->nom,
                'Prenom' => $request->prenom,
                'stat' => $request->statut,
            ]);
            return redirect()->back()->with('auteurAdded', 'Auteur ajouté avec succès !');
        }
        
    }
}
