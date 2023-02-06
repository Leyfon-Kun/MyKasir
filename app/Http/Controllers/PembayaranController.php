<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\DetailPembayaran;
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
        $menu = DB::table('menu')
            ->select('jenis', 'menu.*')
            ->join('jenis_menu', 'menu.id_jenis_menu', 'jenis_menu.id')
            ->get();
        $cari = DB::table('detail_pembayaran')
            ->select('nama_menu', 'menu.harga', 'kode_menu', 'subtotal', 'detail_pembayaran.harga as total', 'detail_pembayaran.id')
            // ->where('id_pembayaran', session('id_pembayaran'))
            ->join('menu', 'detail_pembayaran.id_menu', 'menu.id')
            ->get();
        $total = DB::table('detail_pembayaran')->selectRaw("sum(harga) as total")->where('id_pembayaran')->groupBy('id_pembayaran')->first();
        return view('dashboard.pembayaran.index', compact('cari', 'menu', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function caribarang()
    {
        $menu = Menu::where('kode_menu', Request()->kode_menu)->first();
        if (session('id_pembayaran')) {
            $cek = DB::table('detail_pembayaran')->where('id_pembayaran')->where('id_menu', $menu->id)->first();

            if ($cek === null) {
                DB::table('detail_pembayaran')->insert([
                    'id_menu' => $menu->id,
                    // 'id_pembayaran' => session('id_pembayaran'),
                    'subtotal' => '1',
                    'harga' => $menu->harga
                ]);
            } else {
                DB::table('detail_pembayaran')->where('id', $cek->id)->update([
                    'subtotal' => $cek->subtotal + 1,
                    'harga' => ($cek->harga) + $menu->harga
                ]);
            }
        } else {
            $idpembayaran = Pembayaran::create();
            DB::table('detail_pembayaran')->insert([
                'id_menu' => $menu->id,
                'id_pembayaran' => $idpembayaran->id,
                'harga' => $menu->harga
            ]);

            session(['id_pembayaran' => $idpembayaran->id]);
        }
        return redirect()->back();
    }

    public function updateJumlah($id)
    {
        $data = DB::table('detail_pembayaran')->where('id', $id)->first();

        $harga = $data->harga / $data->subtotal;

        DB::table('detail_pembayaran')->where('id', $id)->update([
            'subtotal' => Request()->subtotal,
            'harga' => Request()->subtotal * $harga
        ]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = pembayaran::where('id', session('id_pembayaran'))->update(Request()->except('_token'));
        $data = DetailPembayaran::where('id_pembayaran', session('id_pembayaran'))->get();
        foreach ($data as $d) {
            $produk = Menu::find($d->id_menu);
            $produk->stok -= $d->qty;
            if ($produk->stok < $d->qty) {
                return redirect()->back()->with('error', 'Stok Tidak Mencukupi');
            } elseif ($produk->stok === null) {
                return redirect()->back()->with('error', 'Stok Sudah Habis');
            } else {
                $produk->update();
            }
        }
        return redirect("/sukses");
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
    // public function destroy(Pembayaran $pembayaran, $id)
    // {
    //     DetailPembayaran::find($pembayaran)->delete();
    //     return redirect()->back();
    // }
    public function destroy($id)
    {
        DetailPembayaran::find($id)->delete();
        return redirect()->back();
    }
}
