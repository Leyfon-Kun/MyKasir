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
        $jenismenu = JenisMenu::paginate(20);
        return view('dashboard.jenismenu.index', compact('jenismenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jenismenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required'
        ], [
            'jenis.required' => 'Harap Masukkan Jenis Menu'
        ]);

        JenisMenu::create($request->except('_token'));
        // @dd($request);
        return redirect('/admin/jenismenu')->with('success', 'Jenis Menu Berhasil Di Tambahkan');
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
    public function edit(JenisMenu $jenismenu)
    {
        return view('dashboard.jenismenu.edit', compact('jenismenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisMenu  $jenismenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisMenu $jenismenu)
    {
        $request->validate([
            'jenis' => 'required'
        ], [
            'jenis.required' => 'Harap Masukkan Jenis Menu'
        ]);

        $jenismenu->update($request->except('_token'));
        return redirect('/admin/jenismenu')->with('success', 'Jenis Menu Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisMenu  $jenismenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisMenu $jenismenu)
    {
        $jenismenu->delete();
        // @dd($jenismenu);
        return redirect('/admin/jenismenu')->with('success', 'Jenis Menu Berhasil Di Hapus');
    }
}
