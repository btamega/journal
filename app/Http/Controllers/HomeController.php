<?php

namespace App\Http\Controllers;

use App\Models\Sommaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }
    public function storeSommaire(Request $request)
    {
        if (DB::table('sommaires')->where('Titre',$request->titre)->exists()) {
           return redirect()->back()->with('sommaireExist','Erreur, ce sommaire existe déjà !');
        } else {
           DB::table('sommaires')->insert([
            'Titre' =>$request->titre
           ]);
           return redirect()->back()->with('sommaireAdded','Sommaire ajouté avec succès !');
        }
        
    }
    public function addAdmin(Request $request)
    {
        $password=Hash::make($request->password);
        if (DB::table('users')->where('email', $request->email)->exists()) {
            DB::table('users')->where('email',$request->email)->update([
                'role'=>"admin",
            ]);
            return redirect()->back()->with('adminAdded','Votre utilisateur est dorénavant administrateur du site');
        }else{
        if ($request->password==$request->confirmPassword) {
            DB::table('users')->insert([
                'name' => $request->lastName.' '.$request->firstName,
                'email'=>$request->email,
                'password'=>$password,
                'role'=>"admin",
            ]);
            return redirect()->back()->with('adminAdded','Votre utilisateur est dorénavant administrateur du site');
        } else {
            return redirect()->back()->with('errorPassword','Erreur, les mots de passe ne correspondent pas');
        }
        }
        
        
    }
    public function admin()
    {
        $admins=DB::table('users')->where('role','admin')->get();
        $users=DB::table('users')->get();
        return view('admin/admins')->with('admins',$admins)->with('users',$users);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        return view('admin/pages/home');
    }
    public function about()
    {
        return view('admin/pages/about');
    }
    public function sommaire()
    {
        $sommaires=Sommaires::all();
        return view('admin/sommaire',compact('sommaires'));
    }
        
    public function languageDemo()
    {
        return view('languageDemo');
    }
    public function editorial()
    {
        return view('admin/pages/editorial');
    }
    public function recommandation()
    {
        return view('admin/pages/recommandation');
    }
    public function archive()
    {
        return view('admin/pages/archive');
    }
    public function contact()
    {
        return view('admin/pages/contact');
    }
    public function delete($id)
    {
        DB::table('users')->where('id',$id)->update([
            'role'=>'user'
        ]);
        return redirect()->back()->with('update','Mise à jour effectuée avec succès !');
    }
}
