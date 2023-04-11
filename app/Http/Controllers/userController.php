<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\jenisproduk;

class userController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $jenisproduk = DB::table('jenisproduks')->get();
        $produk = DB::table('produks')->get();
        $data = array(
            'menu' => 'home',
            'jenisproduk' => $jenisproduk,
            'produk' => $produk,
            'submenu' => ''
            );
        return view('user.index', $data);
    }

    public function kategori(){
        $jenisproduk = DB::table('jenisproduks')->get();
        $data = array(
            'menu' => 'jenisproduk',
            'jenisproduk' => $jenisproduk,
            'submenu' => ''
            );
        return view('user.kategori', $data);
    }
    public function produk(){
        $produk = DB::table('produks')->get();
        $data = array(
            'menu' => 'produk',
            'submenu' => 'produk',
            'produk' => $produk
            );
        return view('user.produk', $data);
    }

    public function  me(Request $request): JsonResponse{
        // $user =  User::with(["identity"])->get();
        // $jwt = (JWT::decoder($request))->$user->id;
        $payload = JWT::decoder($request);
        $user =  User::where('id', $payload->id)->with(["identity"])->fisrt();
        return BaseResponse::ok('Me', [
            "data" => $user
        ]);
    }
}
