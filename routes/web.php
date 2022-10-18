<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Template\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolumeController;
use App\Http\Controllers\FasciculesController;
use App\Models\Commentaires;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchArticlesController;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Article;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\Fascicule;
use App\Http\Resources\FasciculeResource;
use App\Http\Resources\Volume;
use App\Http\Resources\VolumeResource;
use App\Models\Fascicules;
use App\Models\NewArticles;
use App\Models\Volumes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
 * @author Admin
 */
Route::get('/admin',[AdminController::class, 'authenticate']);
Route::get('/admin/pages/home',[HomeController::class, 'home']);
Route::get('/admin/pages/about',[HomeController::class, 'about']);
Route::get('/admin/pages/sommaires',[HomeController::class, 'sommaire']);
Route::get('/admin/pages/editorialComittee',[HomeController::class, 'editorial']);
Route::get('/admin/pages/recommandation',[HomeController::class, 'recommandation']);
Route::get('/admin/pages/archive',[HomeController::class, 'archive']);
Route::get('/admin/pages/contact',[HomeController::class, 'contact']);
Route::get('/addVolumes',[VolumeController::class, 'show']);
Route::post('/createVolume',[VolumeController::class, 'store']);
Route::post('/createSommaire',[HomeController::class, 'storeSommaire']);
Route::post('/createAuteur',[AuteurController::class, 'store']);
Route::get('/addFascicules',[FasciculesController::class, 'store']);
Route::get('/addArticles',[FasciculesController::class, 'addArticles']);
Route::get('/admin/pages/auteurs',[AuteurController::class, 'index']);
Route::get('/admin/pages/allAdmin',[HomeController::class, 'admin']);
Route::get('/admin/delete/{id}',[HomeController::class, 'delete']);
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/user/signUp', 'App\Http\Controllers\SecurityController@signUp');
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/comiteEditorial', function () {
    return view('comiteEditorial');
});
Route::get('/derniersVolumes', function () {
    return view('derniersVolumes');
});
Route::get('/recommandation', function () {
    return view('recommandation');
});
Route::get('/recommandation/ethiques', function () {
    return view('ethique');
});
Route::post('/articles_list', function () {
    $commentaire=new Commentaires();
    $commentaire->Message=request('commentText');
    $commentaire->Nom=request('userName');
    $commentaire->Email=request('commentEmail');
    $commentaire->save();
    return redirect('/contact');
});


Route::get("/volume/{id}/fascicules", [VolumeController::class, 'index']);
Route::get("/fascicule/{id}/articles", [FasciculesController::class, 'index']);
Route::get('/search',[SearchArticlesController::class, 'index']);
Route::get("/archives-{annee1}-{annee2}", [ArchivesController::class, 'index']);
Route::get('/archives-2010-2019', function () {
    return view('archive');
});
Route::get('/archives_2009_2000', function () {
    return view('archives/archives-2009-2000/archives-2009-2000');
});
Route::get('/archives_1999_1990', function () {
    return view('archives/archives-1999-1990/archives-1999-1990');
});
Route::get('/archives_1989_1980', function () {
    return view('archives/archives-1989-1980/archives-1989-1980');
});
Route::get('/archives_1979_1970', function () {
    return view('archives/archives-1979-1970/archives-1979-1970');
});
Route::get('/archives_1969_1960', function () {
    return view('archives/archives-1969-1960/archives-1969-1960');
});
Route::get('/archives_1959_1950', function () {
    return view('archives/archives-1959-1950/archives-1959-1950');
});
Route::get('/archives_1949_1940', function () {
    return view('archives/archives-1949-1940/archives-1949-1940');
});
Route::get('/archives_1939_1930', function () {
    return view('archives/archives-1939-1930/archives-1939-1930');
});
Route::get('/archives_1929_1921', function () {
    return view('archives/archives-1929-1921/archives-1929-1921');
});
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
// Auth::routes();
/**
 * @admin route login
 */
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get("/login", [AdminController::class, 'getLogin'])->name('login');
Route::post("/register", [AdminController::class, 'register'])->name('register');
Route::post('/logout', [AdminController::class, 'logout']);
Route::post('/create', [HomeController::class, 'addAdmin']);
Route::post('/doLogin', [AdminController::class, 'postLogin']);
Route::get('/volume', [VolumeController::class, 'show']);
Route::post('/createVolume', [VolumeController::class, 'store']);
Route::get('/fascicule', [FasciculesController::class, 'show']);
Route::post('/createFascicule', [FasciculesController::class, 'store']);
Route::get('/article', [FasciculesController::class, 'showArticles']);
Route::post('/createArticle', [FasciculesController::class, 'create']);

Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');

/**
 * @api route
 */
Route::get("/api/archives", [ArchivesController::class, 'getArchives']);
Route::get("/api/archive/{id}", [ArchivesController::class, 'fascicules']);
Route::get("/api/fascicule/{id}", [ArchivesController::class, 'getFascicules']);
Route::get("/api/fascicule/{idFascicule}/sommaire/{idSommaire}/articles", [ArchivesController::class, 'getArticles']);
Route::get("/api/article/{idArticle}/auteurs", [ArchivesController::class, 'getAuteurs']);
Route::get("/api/lastIssues", [ArchivesController::class, 'lastIssues']);
Route::get("/api/recentArchives", [ArchivesController::class, 'archives']);
Route::get("/api/archives-{annee1}-{annee2}", [ArchivesController::class, 'archives20102019']);

/**
 * @template 
 */

Route::get("/admin/template", [TemplateController::class, 'index']);
Route::get('/admin/colors', function () {
    return view('/admin/template/colors');
});
Route::get('template/form', function () {
    return view('/admin/template/forms/form-control');
});
Route::get('template/name', function () {
    return view('/admin/template/typography');
});
Route::get('template/accordion', function () {
    return view('/admin/template/base/accordion');
});
Route::get('template/breadcrumb', function () {
    return view('/admin/template/base/breadcrumb');
});
Route::get('template/cards', function () {
    return view('/admin/template/base/cards');
});
Route::get('template/carousel', function () {
    return view('/admin/template/base/carousel');
});
Route::get('template/collapse', function () {
    return view('/admin/template/base/collapse');
});
Route::get('template/list-group', function () {
    return view('/admin/template/base/list-group');
});
Route::get('template/navs-tabs', function () {
    return view('/admin/template/base/navs-tabs');
});
Route::get('template/pagination', function () {
    return view('/admin/template/base/pagination');
});
Route::get('template/placeholders', function () {
    return view('/admin/template/base/placeholders');
});
Route::get('template/popovers', function () {
    return view('/admin/template/base/popovers');
});
Route::get('template/progress', function () {
    return view('/admin/template/base/progress');
});
Route::get('template/spinners', function () {
    return view('/admin/template/base/spinners');
});
Route::get('template/tables', function () {
    return view('/admin/template/base/tables');
});
Route::get('template/tooltips', function () {
    return view('/admin/template/base/tooltips');
});

Route::post('/postColor',[TemplateController::class, 'postColor']);
