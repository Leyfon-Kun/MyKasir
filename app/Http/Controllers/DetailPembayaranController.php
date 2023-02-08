<?php

namespace App\Http\Controllers;

use App\Models\DetailPembayaran;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DetailPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggal_awal = Request()->tanggal_awal;
        $tanggal_akhir = Request()->tanggal_akhir;

        if ($tanggal_awal || $tanggal_akhir) {
            $tanggal = date("d/m/y", strtotime($tanggal_awal)) . ' s/d ' . date("d/m/y", strtotime($tanggal_akhir));
            $data = Pembayaran::orderBy('id', 'desc')->whereBetween("created_at", [$tanggal_awal, $tanggal_akhir])->get();
        } else {
            $tanggal = date("Y-m-d");
            $data = Pembayaran::orderBy('id', 'desc')->whereDate("created_at", $tanggal)->get();
        }

        $total = 0;
        foreach ($data as $d) {
            $total += $d->total_harga;
        }
        return view('dashboard.detailpembayaran.index', compact('data', 'tanggal', 'total'));
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
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPembayaran $detailPembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPembayaran $detailPembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPembayaran $detailPembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPembayaran $detailPembayaran, $id)
    {
        Pembayaran::find($id)->delete();
        return redirect()->back();
    }
}
