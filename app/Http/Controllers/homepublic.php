<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\jenisproduk;

class homepublic extends Controller
{
    public function index(){
        $produk = DB::table('produks')->get();
        $jenisproduk = DB::table('jenisproduks')->get();
        $data = array(
            'menu' => 'homepage',
            'produk' => $produk,
            'jenisproduk' => $jenisproduk
            );
        return view('v_public.homepublic', $data);
    }

    public function kategori(){
        $jenisproduk = DB::table('jenisproduks')->get();
        $data = array(
            'menu' => 'jenisproduk',
            'jenisproduk' => $jenisproduk,
            'submenu' => ''
            );
        return view('v_public.Jenisproduk', $data);
    }
    public function produk(){
        $produk = DB::table('produks')->get();
        $data = array(
            'menu' => 'produk',
            'submenu' => 'produk',
            'produk' => $produk
            );
        return view('v_public.produk', $data);
    }

    public function tentang(){
        $data = array(
            'menu' => 'tentang',
            'submenu' => ''
            );
        return view('v_public.tentang', $data);
    }

    
}
