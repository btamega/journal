<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;
use App\Models\Volumes;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    
    function index(Request $request)
    {
        $commentaire=new Commentaires();
        $commentaire->created_at=$request ->json('created_at');
        $commentaire->Message=$request ->json('message');
        $commentaire->Nom=$request ->json('userName');
        $commentaire->Email=$request ->json('email');
        if ($commentaire->save()) {
            return response()->json([
                'success' =>true
            ]);
        } else {
            return response()->json([
                'success' =>false
            ]);
        }
        
    }
}
