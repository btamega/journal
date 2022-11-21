<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{   
    protected $redirectTo = '/admin/login';
    //
    public function index()
    {
        return view('admin/index');
    }       
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->json('email'), 'password' => $request->json('password')]))
        { 
            $user = Auth::user();
            return response()->json([
                'success' =>"You are login successfully!",
                'user' =>$user,
            ]);
            
        } else {
            return response()->json([
                'error' =>"Your credentials do not match our records !"
            ]);
        }
    }
    public function createAccount(Request $request)
    {
        
        $user=DB::table('users')->where('email',$request->json('email'))->first();
        $password = $request->json('password');
        if (empty($user)) {
                DB::table('users')->insert([
                    'name' => $request->json('userName'),
                    'email' => $request->json('email'),
                    'created_at' => $request->json('created_at'),
                    'password' => Hash::make($password),
                ]);
                return response()->json([
                    'success' =>"Your account has been created successfully !"
                ]);
            
        } else {
            return response()->json([
                'error' =>"This user already exists !"
            ]);
        }
    }
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('admin/login');
    }
    public function showAllAdmin()
    {
        $admins=DB::table('users')->where('role','admin')->get();
        $users=DB::table('users')->get();
        return view('admin/admins',compact('admins','users'));
    }
    

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        { 
            $user = Auth::user();
            if ($user->role=='admin') {
                Session::put('success','You are Login successfully!!');
                return view('admin/index')->with('user',$user);
            }
            else{
                Session::put('success','You are Login successfully!!');
                return redirect()->back()->with('user',$user);
            }
            
            
        } else {
            return back()->with('error','your username and password are wrong.');
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        Session::flush();
        Session::put('success','You are logout successfully');        
        return view('/home');
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
        ]);
        $user=DB::table('users')->where('email',$request->email)->first();
        $password = $request->password;
        if (empty($user)) {
            if ($password==$request->passwordConfirm) {
                DB::table('users')->insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($password),
                ]);
                Session::put('accountCreated','Your account has been created successfully !');
                return redirect()->back();
            } else {
                Session::put('errorPassword','Your passwords do not match !');
                return redirect()->back();
            }
            
        } else {
            Session::put('userExist','This user already exists !');
            return redirect()->back();
        }
    }

}
