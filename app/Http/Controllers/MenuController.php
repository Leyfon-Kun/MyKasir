<?php

namespace App\Http\Controllers;

use App\Models\JenisMenu;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::Paginate(20);
        return view('dashboard.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenismenu = JenisMenu::all();
        return view('dashboard.menu.create', compact('jenismenu'));
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
        'nama_menu' => 'required',
        'stok' => 'required',
        'harga' => 'required',
        'id_jenis_menu' => 'required'
       ]);

       $random = mt_rand(123452342, 999999999);

       $data = [
        'nama_menu' => request()->nama_menu,
        'kode_menu' => $random,
        'stok' => request()->stok,
        'harga' => request()->harga,
        'id_jenis_menu' => request()->id_jenis_menu
       ];

    //    @dd($data);
       Menu::create($data);
       return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $jenismenu = JenisMenu::all();
        // $menu = Menu::all();
        return view('dashboard.menu.edit', compact( 'menu', 'jenismenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        Request()->validate([
            'nama_menu' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'id_jenis_menu' => 'required'
        ],[
            'nama_menu.required' => 'Harap Masukkan Nama Menu',
            'stok.required' => 'Harap Masukkan Stok',
            'harga.required' => 'Harap Masukkan Harga',
            'id_jenis_menu.required' => 'Harap Tentukan Jenis Barang'
        ]);

        // @dd(Request()->except('_token'));
        $menu->update(Request()->except('_token'));
        return redirect('/menu')->with('pesan', 'Menu Berhasi Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        // @dd($menu);
        return redirect('/menu')->with('pesan', "Menu Berhasil Di Hapus");
    }
}
