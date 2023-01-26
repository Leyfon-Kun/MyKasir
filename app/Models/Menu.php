<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "menu";
    protected $fillable = ["nama_menu", "stok", "harga", "id_jenis_barang"];
    public $timestamps = false;
}
