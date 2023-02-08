<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pembayaran;
use App\Models\DetailPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{

    public function index()
    {

        $menu = DB::table('menu')
            ->select('jenis', 'menu.*')
            ->join('jenis_menu', 'menu.id_jenis_menu', 'jenis_menu.id')
            ->get();
        $cari = DB::table('detail_pembayaran')
            ->select('nama_menu', 'menu.harga', 'kode_menu', 'subtotal', 'detail_pembayaran.harga as total', 'detail_pembayaran.id')
            ->where('id_pembayaran', session('id_pembayaran'))
            ->join('menu', 'detail_pembayaran.id_menu', 'menu.id')
            ->get();
        $total = DB::table('detail_pembayaran')->selectRaw("sum(harga) as total")->where('id_pembayaran', session('id_pembayaran'))->groupBy('id_pembayaran')->first();
        return view('dashboard.pembayaran.index', compact('cari', 'menu', 'total'));
    }

    public function carikodebarang()
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

    public function carinamabarang()
    {
        $menu = Menu::where('nama_menu', Request()->nama_menu)->first();
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
                    'harga' => ($cek->subtotal + 1) * $menu->harga
                ]);
            }
        } else {
            $idpembayaran = Pembayaran::create();
            DB::table('detail_pembayaran')->insert([
                'id_menu' => $menu->id,
                'id_pembayaran' => $idpembayaran->id,
                'subtotal' => '1',
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

    public function store(Request $request)
    {
        Request()->validate([
            'kembalian' => 'required',
            'pembayaran' => 'required',
            'total_harga' => 'required'
        ]);
        if (Request()->pembayaran < Request()->total_harga) {
            return redirect()->back()->with('eror', 'Pembayaran Kurang');
        }

        $data = array_merge(Request()->except('_token'), ['id_kasir' => auth()->id()]);
        $id = Pembayaran::where('id', session('id_pembayaran'))->update($data);
        $data = DetailPembayaran::where('id_pembayaran', session('id_pembayaran'))->get();
        foreach ($data as $d) {
            $produk = Menu::find($d->id_menu);
            $produk->stok -= $d->subtotal;
            $produk->update();
        }
        session(['selesai' => true]);
        return redirect('/berhasil');
    }

    public function berhasil()
    {
        $data = Pembayaran::where('id', session('id_pembayaran'))->get();
        session(['id_pembayaran' => '']);

        return view('dashboard.detailpembayaran.index', compact('data'));
    }

    // public function cetakStruke()
    // {
    //     $barang = DetailPembayaran::where("id_pembayaran", session('id_pembayaran'))->get();
    //     $total_item = DetailPembayaran::where("id_pembayaran", session('id_pembayaran'))->sum("qty");
    //     $pembayaran = pembayaran::find(session('id_pembayaran'));
    //     $bio = DB::table('bio')->first();
    //     return view("transaksi.struk", compact('pembayaran', 'barang', 'total_item', 'bio'));
    // }

    public function destroy($id)
    {
        DetailPembayaran::find($id)->delete();
        return redirect()->back();
    }
}
