<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenisMenu;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = ['nama_menu', 'kode_menu', 'stok', 'harga', 'id_jenis_menu'];
    protected $hidden = ['id_jenis_menu'];
    public $timestamps = false;

    public function jenis()
    {
        return $this->belongsTo(JenisMenu::class, 'id_jenis_menu');
    }
}
