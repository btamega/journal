<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Auteur;
use App\Models\Fascicules;
use App\Models\NewArticles;
use App\Models\Sommaires;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class FasciculesController extends Controller
{
    public function storePDF($inputName,$year)
    {
        $date = new Carbon($year);
        $annee=$date->year;
        // dd($annee);
        $target_dir = "../public/Downloads/".$annee;
        if (!is_dir($target_dir)) {
            mkdir("../public/Downloads/$annee",0777,true);
        }
        $target_file = $target_dir.basename($_FILES[$inputName]["name"]);
        $path="Downloads/".$annee."/".basename($_FILES[$inputName]["name"]);
        $realpath=str_replace(' ', '_',$annee."/".basename($_FILES[$inputName]["name"]));
        $uploadOk = 1;
        $getfilename =  str_replace(' ', '_', $path);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$inputName]["tmp_name"]);
        if($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            return redirect()->back()->with('error','Ce fichier n\'est pas une image !');
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
          return redirect()->back()->with('fileExist','Ce fichier existe déjà dans la base de données !');
        $uploadOk = 0;
        }

        //Check file size
        if ($_FILES[$inputName]["size"] > 50000*1024) {
          return redirect()->back()->with('fileSize','La taille de votre fichier est trop volumineuse !');
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "pdf") {
            return redirect()->back()->with('error','Désolé, le fichier n\'est pas un pdf !');
        $uploadOk = 1;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return redirect()->back()->with('error','Votre fichier n\'a pas été chargé  !');
        } else {
        if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $getfilename)) {
            
            return $realpath;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
    }
   public function index($id){
       $articles = NewArticles::where("id_fascicule", "=" , $id)->get();
       $fascicule = Fascicules::find($id);
       $sommaire = DB::table("sommaires")
       ->join("fascicule_sommaires", "sommaires.id_sommaire", "=", "fascicule_sommaires.id_sommaire")
       ->join("fascicules", "fascicules.id_fascicule", "=", "fascicule_sommaires.id_fascicule")
       ->select("fascicules.id_fascicule","sommaires.*")
       ->get();
       $vignettes=DB::table('vignettes')->where('id_fascicule','=',$id)->get();
       $jaunes=DB::table('vignettes')->where('id_fascicule','=',$id)->where('Type','=','jaune')->get();
       $auteurs = NewArticles::where("id_fascicule", "=" , $id)
       ->join("new__editers", "new_articles.id_articles", "=", "new__editers.id_articles")
       ->join("auteurs", "auteurs.id_auteur", "=", "new__editers.id_auteur")
       ->select("new_articles.id_articles", "auteurs.*")
       ->get();
       
       $data = array();
       foreach ($articles as $article) {
         $dataItem = array();
         array_push($dataItem, $article);
         $ats = array();
         foreach($auteurs as $auteur){
             if($auteur->id_articles == $article->id_articles){
                array_push($ats,$auteur );
             }
         }
         array_push($dataItem, $ats);
         array_push($data, $dataItem);
       }
       
       return view("derniersVolumes/articles_list")->with("data", $data)->with("fascicule", $fascicule)->with('vignettes',$vignettes)->with('jaunes',$jaunes)->with('sommaires',$sommaire);
   }
   public function store(Request $request)
    {   
        $fas=new VolumeController();
        $volume = DB::table('volumes')->select('Nom_Volume','id_volume')->get();
        foreach ($volume as $item) {
            if (str_contains($request->volume,$item->Nom_Volume)) {
            $date = new Carbon($request->annee);
            $year = $date->year;
            $path = $fas->storeVolumeImage('imageFascicule');
            $couverture_blanche = $fas->storeMultipleImage('imageCouverture');
            if (DB::table('fascicules')->where('Année',$year)->where('numero',$request->numeroFascicule)
            ->exists()) {
                return redirect()->back()->with('fasciculeExist','Ce fascicule existe déjà dans la base de données');
            } else {
                $id_fascicule = DB::table('fascicules')->insertGetId([
                    'id_volume' => $item->id_volume, 
                    'Nom' => 'Fascicule',
                    'Année' => $year,
                    'Titre_Fascicule' => '',
                    'numero' => $request->numeroFascicule,
                ]);
                DB::table('vignettes')->insert([
                    'Path' => $path,
                    'id_fascicule' => $id_fascicule,
                    'Type' => 'jaune',
                ]);
                foreach ($couverture_blanche as $key => $cover) {
                    DB::table('vignettes')->insert([
                        'Path' => $cover,
                        'id_fascicule' => $id_fascicule,
                        'Type' => 'autre',
                    ]);
                }
            }
            return redirect()->back()->with('status','Fascicule ajouté avec succès');
            } 
        }
        
    }
   public function show(Request $request)
    {   
        $fascicule=DB::table('fascicules')->orderByDesc('id_fascicule')->get();
        $volumes=DB::table('volumes')->orderByDesc('id_volume')->get();
        return view('admin/fascicules')->with('fascicules',$fascicule)->with('volumes',$volumes);
    }
    public function getFascicule($id)
    {
        $fascicules = Fascicules::all()->where('id_volume',$id);
        return $fascicules;
    }
    public function showArticles()
    {   
        $articles = DB::table('new_articles')->orderByDesc('id_articles')->limit(20)
            ->join('fascicules', 'new_articles.id_fascicule', '=', 'fascicules.id_fascicule')
            ->join('sommaires', 'new_articles.id_sommaire', '=', 'sommaires.id_sommaire')
            ->select('new_articles.*', 'sommaires.Titre as sommaire', 'fascicules.*')
            ->get();
        $fascicule=DB::table('fascicules')->orderByDesc('id_fascicule')->get();
        $sommaires=Sommaires::all();
        $nombreTotalArticles=NewArticles::all()->count();
        $auteurs = Auteur::all();
        return view('admin/articles')
            ->with('articles',$articles)
            ->with('nombre',$nombreTotalArticles)
            ->with('sommaires',$sommaires)
            ->with('auteurs',$auteurs)
            ->with('fascicules',$fascicule);
    }
    public function getArticles($id)
    {
        $articles = DB::table('new_articles')->where('id_fascicule',$id)->get();
        return $articles;
    }
    public function create(Request $request)
    {
        $auteurs=$request->auteurs;
        $sommaire=DB::table('sommaires')->where('Titre',$request->sommaire)->first();
        $fascicules = Fascicules::all();
        $fas=new FasciculesController();
        foreach ($fascicules as $fascicule) {
            if (str_contains($request->fascicule,$fascicule->Nom.' '.$fascicule->numero.' '.$fascicule->Année)){
                $id_article=DB::table('new_articles')->insertGetId([
                    'id_fascicule' => $fascicule->id_fascicule,
                    'id_sommaire' => $sommaire->id_sommaire,
                    'Titre' => $request->titreArticle,
                    'Nbre_Page' => $request->page,
                    'Lien_Telechargement' => $fas->storePDF('path',$request->date),
                    'Date_Publication' => $request->date,
                ]); 
                if (DB::table('fascicule_sommaires')->where('id_fascicule', $fascicule->id_fascicule)->where('id_sommaire', $sommaire->id_sommaire)->exists()) {
                    // ...
                } else {
                    DB::table('fascicule_sommaires')->insert([
                        'id_fascicule' =>$fascicule->id_fascicule,
                        'id_sommaire' =>$sommaire->id_sommaire,
                    ]);
                }
                foreach($auteurs as $index => $auteur){
                    $prenom=strtok($auteur,' ');
                    $nom=strtok(' ');
                    $aut=DB::table('auteurs')->where('Nom',$nom)->where('Prenom',$prenom)->first();
                    if ($aut) {
                        DB::table('new__editers')->insert([
                            'id_articles' => $id_article,
                            'id_auteur' => $aut->id_auteur,
                        ]);
                    } else {
                        return redirect()->back()->with('auteurNotExist','Désolé, cet auteur n\'existe pas');
                    }
                    
                    
                }
                return redirect()->back()->with('status','Article ajouté avec succès');
            }
           
        }
        
    }
}
