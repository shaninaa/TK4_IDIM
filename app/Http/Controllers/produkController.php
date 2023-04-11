<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\jenisproduk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('produks')->join('jenisproduks','produks.id_jenis','=','jenisproduks.id_jenis')->get();
        $data = array(
            'menu' => 'produk',
            'submenu' => 'produk',
            'produk' => $produk
            );
        return view('admin.produkadmin', $data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.create', [
            'jenisproduk' => jenisproduk::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'id_jenis' => 'required',
            'nama_produk' => 'required|max:255',
            'gambar_produk' => 'image',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'ukuran' => 'required|max:255',
            'variasi' => 'required|max:255',
            'deskripsi' => 'max:255'
        ]);
        
        $validatedData['gambar_produk'] = $request->file('gambar_produk')->store('foto-produk');
        produk::create($validatedData);

        return redirect('/produkadm')->with('success', 'Barang baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_produk)
    {
        $produk = produk::where('id_produk', $id_produk)->get();
        
        return view('pesanan.detailproduk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
