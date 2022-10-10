<?php

namespace App\Http\Controllers;

use App\Models\Vignettes;
use Illuminate\Http\Request;
use App\Models\Volumes;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;


class VolumeController extends Controller
{
    public function index($id){
        $fascicules = DB::table("fascicules")->where("id_volume", "=", $id)->get();
        $vignettes=DB::table('vignettes')->where('Type','=','jaune')->get();
        $volume = Volumes::find($id);
        return view("derniersVolumes/fascicules_liste")->with("fascicules", $fascicules)->with("volume", $volume)->with('vignettes',$vignettes);
    }
    public function show(Request $request)
    {   
        $volume=DB::table('volumes')->orderByDesc('id_volume')->get();
        return view('admin/volumes')->with('volumes',$volume);
    }
    public function storeVolumeImage($inputName)
    {   
        $target_dir = "../public/images/";
        $target_file = $target_dir . basename($_FILES[$inputName]["name"]);
        $path="images/".basename($_FILES[$inputName]["name"]);
        $uploadOk = 1;
        $getfilename =  str_replace(' ', '_', $path);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$inputName]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            return redirect()->back()->with('error','Ce fichier n\'est pas une image !');
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        // if (file_exists($target_file)) {
        //   return redirect()->back()->with('fileExist','Ce fichier existe déjà dans la base de données !');
        // $uploadOk = 0;
        // }

        //Check file size
        if ($_FILES[$inputName]["size"] > 50000*1024) {
          return redirect()->back()->with('fileSize','La taille de votre image est trop volumineuse !');
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
            return redirect()->back()->with('error','Désolé, les types de fichiers supportés sont JPG, JPEG, PNG & GIF !');
        $uploadOk = 1;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return redirect()->back()->with('error','Votre image n\'a pas été chargée  !');
        } else {
        if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $getfilename)) {
            
            return $getfilename;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
    }
    public function storeMultipleImage($inputName)
    {
        
        $couverture=array();
        $total_count = count($_FILES[$inputName]["name"]);
            for( $i=0 ; $i < $total_count ; $i++ ) {
                $tmpFilePath = $_FILES[$inputName]["tmp_name"][$i];
                if ($tmpFilePath != ""){
                    $newFilePath = "../public/images/" . basename($_FILES[$inputName]["name"][$i]);
                    $imageFileType = strtolower(pathinfo($newFilePath,PATHINFO_EXTENSION));
                    $getfilename =  str_replace(' ', '_', $newFilePath);
                    $path= "images/".str_replace(' ', '_', $_FILES[$inputName]["name"][$i]);
                    
                    if (file_exists($newFilePath)) {
                        return redirect()->back()->with('fileExist', 'Ce fichier existe déjà dans la base de données !');
                    }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" && $imageFileType!="svg") {
                    return redirect()->back()->with('fileType', 'Erreur, Veuillez charger une image !');
                    }
                    if ($_FILES[$inputName]["size"][$i] > 50000*1024) {
                        return redirect()->back()->with('fileSizeToLong', 'La taille de votre fichier ne doit pas dépasser 50Mo !');
                    }
                    if(move_uploaded_file($_FILES[$inputName]["tmp_name"][$i], $getfilename)) {
                        array_push($couverture,$path);
                    }else{
                        return redirect()->back()->with('fileNotUploaded', 'Désolé, le fichier n\'a pas été chargé !');
                    }
                }
            }
            
            return $couverture;
    }
    public function store(Request $request)
    {   
        $vol=new VolumeController();
        $volume=DB::table('volumes')->orderByDesc('id_volume')->get();
        $numeroVolume=DB::table('volumes')->where('Nom_Volume','=','Vol. '.$request->numero)->first();
        if ($numeroVolume) {
            return redirect()->back()->with('error','Ce volume existe déjà !')->with('volumes',$volume);  
        }
        else {
            $date = new Carbon($request->annee);
            $year = $date->year;
            $path = $vol->storeVolumeImage('imageVolume');
            $volume= new Volumes();
            $volume->Titre=$request->volume;
            $volume->Année=$year;
            $volume->cover=$path;
            $volume->Nom_Volume='Vol. '.$request->numero;
            $volume->save();
            return redirect()->back()->with('status','Volume ajouté avec succès')->with('volumes',$volume);
         }
    }

    public function getVolume()
    {
       $volume = DB::table('volumes')->orderByDesc('id_volume')->get();
       return $volume;
    }
    public function getSommaire($id)
    {
        $sommaires = DB::table('fascicules')
        ->join('fascicule_sommaires', 'fascicules.id_fascicule', '=', 'fascicule_sommaires.id_fascicule')
        ->join('sommaires', 'fascicule_sommaires.id_sommaire', '=', 'sommaires.id_sommaire')
        ->select('sommaires.*', 'fascicules.*')
        ->get();
        return $sommaires;
    }
    
}
