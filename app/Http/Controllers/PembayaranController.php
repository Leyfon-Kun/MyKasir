<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pembayaran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $menu = Menu::where('kode_menu', Request()->kode_menu)->first();
        if(session('id_pembayaran')){

            $cek = DB::table('detail_pembayaran')->where('id_pebayaran', session('id_pembayaran'))->where('id_menu', $menu->id)->first();

            if($cek === null) {
                DB::table('detail_pembayaran')->insert([
                    'id_menu'=>$menu->id,
                    'id_pembayaran'=>session('id_pembayaran'),
                    'total_menu'=>'1',
                    'subtotal'=>$menu->harga
                ]);
            }else{
                DB::table('detail_pembayaran')->where('id', $cek->id)->update([
                    'total_menu'=>$cek->total_menu+1,
                    'subtotal'=>($cek->subtotal+1)*$menu->harga
                ]);
            }
        }

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
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
