<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin/template/index");
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
        $data = $request->all();
        $request->session()->put('journalDatas',$data);
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
        $request->session()->put('colorNavbar',$NavigColor );
        $request->session()->put('colorText',$TextColor );
        $request->session()->put('colorBody',$BackgroundColor );

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
        $data = $request->all();
        $request->session()->put('archives', $data);

    }
    public function storeRecommandation(Request $request)
    {
        $data = $request->all();
        $request->session()->put('recommandation', $data);

    }
    public function storeAbout(Request $request)
    {
        $data = $request->all();
        $request->session()->put('about', $data);

    }
    public function storeHome(Request $request)
    {
        $data = $request->all();
        $request->session()->put('home', $data);

    }
    public function storeLastIssues(Request $request)
    {
        $data = $request->all();
        $request->session()->put('lastIssues', $data);

    }
    public function storeContact(Request $request)
    {
        $data = $request->all();
        $request->session()->put('contact', $data);

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
