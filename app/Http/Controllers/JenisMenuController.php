<?php

namespace App\Http\Controllers;

use App\Models\JenisMenu;
use Illuminate\Http\Request;

class JenisMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisMenu = JenisMenu::paginate(20);
        return view('dashboard.jenismenu.index', compact('jenisMenu'));
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
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function show(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisMenu $jenisMenu)
    {
        //
    }
}
