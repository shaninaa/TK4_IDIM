<?php

namespace App\Models;
use App\Models\produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan_detail extends Model
{
    use HasFactory;
    public function produk(){
        return $this ->belongsTo('\App\Models\produk', 'id_produk', 'id_produk');
    }
}
