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
        // dd($menus["menu"][0]);
        return view('/admin/template/menu-horizontal')->with('menus',$menus);
    }
    public function getMenuVertical()
    {
        return view('/admin/template/menu-vertical');
    }
    public function storeJournalInfos(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // $this->validate($request, [
        //     'journalName' => 'required|max:255',
        //     'coordinateur' => 'required|max:255',
        //     'universiy' => 'nullable|max:255',
        //     'association' => 'nullable|max:255',
        //     'logo' => 'required|image',
        //     'logo2' => 'nullable|image',
        //     'other' => 'nullable|max:255',
        // ]);
        $request->session()->put('journalDatas', $data);
        if ($request->dispositionMenu=="Horizontal") {
            return redirect()->route('menuHorizontal');
        } else {
            return redirect()->route('menuVertical');
        }
        
        
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
        //
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
