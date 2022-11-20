<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use App\Models\NewArticles;
use App\Models\Sommaires;
use App\Models\Articles;
use App\Models\Auteur;
class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function uploadMultipeFiles($inputName)
    {
        $justificatif=array();
        $files = array_filter($_FILES[$inputName]["name"]);
            $total_count = count($_FILES[$inputName]["name"]);
            for( $i=0 ; $i < $total_count ; $i++ ) {
                $tmpFilePath = $_FILES[$inputName]["tmp_name"][$i];
                if ($tmpFilePath != ""){
                    $newFilePath = "images/" . basename($_FILES[$inputName]["name"][$i]);
                    $imageFileType = strtolower(pathinfo($newFilePath,PATHINFO_EXTENSION));
                    $getfilename =  str_replace(' ', '_', $newFilePath);
                    $path= "images/".str_replace(' ', '_', $_FILES[$inputName]["name"][$i]);
                    //File is uploaded to temp dir
                    if (file_exists($newFilePath)) {
                        return redirect()->back()->with('fileExist', 'Ce fichier existe déjà dans la base de données !');
                    }
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    return redirect()->back()->with('fileType', 'Erreur, Veuillez charger une image !');
                    }
                    if ($_FILES[$inputName]["size"][$i] > 5000*1024) {
                        return redirect()->back()->with('fileSizeToLong', 'La taille de votre fichier ne doit pas dépasser 5Mo !');
                    }
                    if(move_uploaded_file($_FILES[$inputName]["tmp_name"][$i], $getfilename)) {
                        array_push($justificatif,$path);
                    }else{
                        return redirect()->back()->with('fileNotUploaded', 'Désolé, le fichier n\'a pas été chargé !');
                    }
                }
            }
            return $justificatif;
    }
    public function getHome()
    {
        $homeText = DB::table('key_value')->where('key','home')->first();
        $universite = DB::table('key_value')->where('key','organisation')->first();
        return view('/home')->with('homeText',$homeText)->with('universite',$universite);
    }
    public function getAbout()
    {
        $aboutText = DB::table('key_value')->where('key','about')->first();
        return view('/about')->with('aboutText',$aboutText);
    }
    public function getArchives()
    {
        $archivesText = DB::table('key_value')->where('key','archives')->first();
        return view('/archive')->with('archivesText',$archivesText);
    }
    public function getRecommandation()
    {
        $recommandationText = DB::table('key_value')->where('key','recommandation')->first();
        return view('/recommandation')->with('recommandationText',$recommandationText);
    }
    public function getContact()
    {
        $contactText = DB::table('key_value')->where('key','contact')->first();
        $coordinateur = DB::table('key_value')->where('key','coordinateur')->first();
        $email = DB::table('key_value')->where('key','email')->first();
        $universite = DB::table('key_value')->where('key','organisation')->first();
        return view('/contact')->with('contactText',$contactText)->with('coordinateur',$coordinateur)
        ->with('email',$email)->with('universite',$universite);
    }
    public function getLastIssues()
    {
        $lastIssuesText = DB::table('key_value')->where('key','lastIssues')->first();
        return view('/lastIssues')->with('lastIssuesText',$lastIssuesText);
    }
    public function index()
    {
        return view("admin/template/index");
    }
    public function getVolumes(Request $request)
    {
        $volume=DB::table('volumes')->orderByDesc('id_volume')->get();
        return view('admin/template/volume')->with('volumes',$volume);
    }
    public function getFascicules(Request $request)
    {
        $fascicule=DB::table('fascicules')->orderByDesc('id_fascicule')->get();
        $volumes=DB::table('volumes')->orderByDesc('id_volume')->get();
        return view('admin/template/fascicule')->with('fascicules',$fascicule)->with('volumes',$volumes);
    }
    public function getArticles(Request $request)
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
        return view('admin/template/articles')
            ->with('articles',$articles)
            ->with('nombre',$nombreTotalArticles)
            ->with('sommaires',$sommaires)
            ->with('auteurs',$auteurs)
            ->with('fascicules',$fascicule);
    }
    public function getAdmins(Request $request)
    {
        $admins=DB::table('users')->where('role','admin')->get();
        $users=DB::table('users')->get();
        return view('admin/template/admins')->with('admins',$admins)->with('users',$users);
    }
    public function recurseCopy(
        string $sourceDirectory,
        string $destinationDirectory,
        string $childFolder = ''
    ) {
        $directory = opendir($sourceDirectory);
    
        if (is_dir($destinationDirectory) === false) {
            mkdir($destinationDirectory);
        }
    
        if ($childFolder !== '') {
            if (is_dir("$destinationDirectory/$childFolder") === false) {
                mkdir("$destinationDirectory/$childFolder");
            }
    
            while (($file = readdir($directory)) !== false) {
                if ($file === '.' || $file === '..') {
                    continue;
                }
    
                if (is_dir("$sourceDirectory/$file") === true) {
                    $this->recurseCopy("$sourceDirectory/$file", "$destinationDirectory/$childFolder/$file");
                } else {
                    copy("$sourceDirectory/$file", "$destinationDirectory/$childFolder/$file");
                }
            }
    
            closedir($directory);
    
            return;
        }
    
        while (($file = readdir($directory)) !== false) {
            if ($file === '.' || $file === '..') {
                continue;
            }
    
            if (is_dir("$sourceDirectory/$file") === true) {
                $this->recurseCopy("$sourceDirectory/$file", "$destinationDirectory/$file");
            }
            else {
                copy("$sourceDirectory/$file", "$destinationDirectory/$file");
            }
        }
    
        closedir($directory);
    }
    public function export(Request $request)
    {   set_time_limit(0);
        $controller = new TemplateController();
        $controller->recurseCopy("C:/xampp/htdocs/Journal","C:/xampp/htdocs/NewJournal");
        
    }
    public function getMenuHorizontal(Request $request)
    {
        $data = $request->session()->get('journalDatas');
        $menus = $data["menu"];
        $other = $data["other"];
        return view('/admin/template/menu-horizontal')->with('menus',$menus);
    }
    public function getMenuVertical(Request $request)
    {
        $data = $request->session()->get('journalDatas');
        $menus = $data["menu"];
        return view('/admin/template/menu-vertical')->with('menus',$menus);
    }
    public function storeJournalInfos(Request $request)
    {
        
        $data = $request->except('logo');
        $organisation = !empty($request->organisation) ? $request->organisation : $request->organisation1;
        $request->session()->put('journalDatas',$data);
        $image= new TemplateController();
        $file=$image->uploadMultipeFiles("logo");
        DB::table('key_value')->insert([
            'key' => 'logo',
            'value' => $file[0]
        ]);
        DB::table('key_value')->insert([
            'key' => 'menu',
            'value' => $request->dispositionMenu
        ]);
        DB::table('key_value')->insert([
            ['key' => 'coordinateur', 'value' => $request->coordinateur],
            ['key' => 'email', 'value' => $request->email],
            ['key' => 'organisation', 'value' => $organisation],
            ['key' => 'journalName', 'value' => $request->journalName],
        ]);
        if ($request->dispositionMenu=="Horizontal") {
            return redirect()->route('menuHorizontal');
        } else {
            return redirect()->route('menuVertical');
        }
        
    }
    public function postColor(Request $request)
    {
        $NavigColor = $request->input('inputOne');
        $TextColor  = $request->input('inputTwo');
        $BackgroundColor  = $request->input('inputThree');
        DB::table('key_value')->insert([
            'key' => 'colorNavbar',
            'value' => $BackgroundColor
        ]);
        DB::table('key_value')->insert([
            'key' => 'colorText',
            'value' => $TextColor
        ]);
        DB::table('key_value')->insert([
            'key' => 'colorBody',
            'value' => $BackgroundColor
        ]);
        // $request->session()->put('colorNavbar',$NavigColor );
        // $request->session()->put('colorText',$TextColor );
        // $request->session()->put('colorBody',$BackgroundColor );

        return redirect("template/name");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->session()->all();
        // dd($data);
        return view("admin/template/index");

    }
    public function storeArchives(Request $request)
    {
        $data = $request->archivesText;
        DB::table('key_value')->insert([
            'key' => 'Archives',
            'status' => '1',
            'value' => $data
        ]);

    }
    public function storeRecommandation(Request $request)
    {
        $data = $request->recommandationText;
        DB::table('key_value')->insert([
            'key' => 'Recommandation',
            'status' => '1',
            'value' => $data
        ]);

    }
    public function storeAbout(Request $request)
    {
        $data = $request->aboutText;
        DB::table('key_value')->insert([
            'key' => 'About',
            'status' => '1',
            'value' => $data
        ]);

    }
    public function storeHome(Request $request)
    {
        $data = $request->homeText;
        DB::table('key_value')->insert([
            'key' => 'Home',
            'status' => '1',
            'value' => $data
        ]);

    }
    public function storeLastIssues(Request $request)
    {
        $data = $request->all();
        DB::table('key_value')->insert([
            'key' => 'Last Issues',
            'status' => '1',
            'value' => $data
        ]);

    }
    public function storeContact(Request $request)
    {
        $data = $request->contactText;
        DB::table('key_value')->insert([
            'key' => 'Contact',
            'status' => '1',
            'value' => $data
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
