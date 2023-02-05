<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = ['id_kasir', 'total_pembayaran', 'total_kembalian', 'total_harga', 'tgl_pembayarans'];

    // public function menu(){
    //     return $this->
    // }
}
