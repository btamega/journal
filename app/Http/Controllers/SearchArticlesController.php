<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SearchArticlesController extends Controller
{
    //
    public function index()
    {
        $word=request()->input('searchword');
        
        $articles=DB::table('new_articles')
        ->where('Titre','LIKE','%'.$word."%")
        ->get();
        $auteurs =DB::table('new__editers')
        ->join("auteurs", "auteurs.id_auteur", "=", "new__editers.id_auteur")
       ->select("new__editers.*", "auteurs.*")
       ->get();
       $SearchAuteurs =DB::table('auteurs')
       ->where('Nom','LIKE','%'.$word."%")
       ->Orwhere('Prenom','LIKE','%'.$word."%")
       ->join("new__editers", "auteurs.id_auteur", "=", "new__editers.id_auteur")
       ->get();
       $Searcharticles=DB::table('new_articles')
        ->get();
        $sommaire = DB::table("sommaires")
       ->get();
        return view('search')->with('articles', $articles)->with('sommaires',$sommaire)->with('auteurs', $auteurs)->with('Searcharticles',$Searcharticles)->with('SearchAuteurs',$SearchAuteurs);        
        
    }
}
