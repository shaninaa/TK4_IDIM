<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = [
        'id_jenis',
        'nama_produk',
        'gambar_produk',
        'harga_produk',
        'stok_produk',
        'ukuran',
        'variasi',
        'deskripsi'
    ];

    public function pesanan_detail(){
        return $this ->hasMany('\App\Models\pesanan_detail', 'id_produk', 'id_produk');
    }
}
