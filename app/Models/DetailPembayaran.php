<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model
{
    use HasFactory;
    protected $table = 'detail_pembayaran';
    protected $fillable = ['id_menu', 'subtotal', 'id_pembayaran', 'harga'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_menu');
    }
}
