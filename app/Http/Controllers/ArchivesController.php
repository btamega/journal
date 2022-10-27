<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArchiveResource;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\FasciculeResource;
use App\Http\Resources\SommaireResource;
use App\Models\Auteur;
use App\Models\Fascicules;
use App\Models\FasciculeSommaire;
use App\Models\NewArticles;
use App\Models\Sommaires;
use App\Models\Vignettes;
use App\Models\Volumes;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class ArchivesController extends Controller
{
    //
    public function index($annee1,$annee2)
    {
        $recentArchives=DB::table('volumes')->whereBetween('Année',[$annee1,$annee2])->get();
        return view('archive')->with('archives',$recentArchives);
    }
    // API ROOT
    public function getArchives()
    {
        $volumes=Volumes::with([
            'fascicules',
        ]);
        return ArchiveResource::collection($volumes->paginate(20))->response();
    }
    public function fascicules($idVolume)
    {
        $fascicules=Fascicules::where('id_volume',$idVolume)
        ->with([
            'sommaires',
            'vignettes'
            ]);
        return FasciculeResource::collection($fascicules->paginate(10))->response();
    }
    public function archives20102019($annee1,$annee2)
    {
        $volumes=Volumes::with(['fascicules'])->whereBetween('Année',[$annee1,$annee2]);
        return ArchiveResource::collection($volumes->paginate(20))->response();
    }
    public function archives()
    {   $maxValue = Volumes::max('Année');
        $volumes=Volumes::with(['fascicules'])->whereBetween('Année',['2020',$maxValue-1]);
        return ArchiveResource::collection($volumes->paginate(20))->response();
    }
    public function volumesMinMax()
    {
        $maxValue = Volumes::max('Année');
        return response()->json(
            [
                'maxVolume' =>$maxValue-1,
            ]
            );
    }
    public function getFascicules($id)
    {
        $fascicules=Fascicules::where('id_fascicule',$id)
        ->with([
            'sommaires',
            'vignettes'
            ]);
        return FasciculeResource::collection($fascicules->paginate(10))->response();
    }
    public function getArticles($idFascicule,$idSommaire)
    {
        $articles=NewArticles::where('id_fascicule',$idFascicule)
        ->where('id_sommaire',$idSommaire)
        ->with(['auteurs'])
        ;
        return ArticleResource::collection($articles->paginate(20))->response();
    }
    public function getAuteurs($idArticle)
    {
        $auteurs=NewArticles::where('new_articles.id_articles',$idArticle)
        ->with(['auteurs']);
        return ArticleResource::collection($auteurs->paginate(10))->response();
    }
    public function lastIssues()
    {
        $maxValue = Volumes::max('Année');
        $lastIssues=DB::table('volumes')->where('Année', '>=', $maxValue)->orderBy('Année','desc')->first();
        $fascicules=Fascicules::where("id_volume", "=", $lastIssues->id_volume)
        ->with([
            'sommaires',
            'vignettes'
            ]);
        return FasciculeResource::collection($fascicules->paginate(10))->response();
    }
}
