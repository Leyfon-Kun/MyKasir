<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';

    // public function menu(){
    //     return $this->
    // }
    public function kasir()
    {
        return $this->belongsTo(User::class, 'id_kasir');
    }
}
