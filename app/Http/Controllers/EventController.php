<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class EventController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        return view('events')->with("news", $news);
        
    }
}
