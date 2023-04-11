<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
//use Alert;
use App\Models\User;
use App\Models\metodebayar;
use App\Models\jenispengiriman;
use App\Models\produk;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kabkot;
use App\Models\Provinsi;
use App\Models\jenisproduk;
use App\Models\pesanan_detail;
use App\Models\pesanan;


class PesananController extends Controller
{
    
    public function pesan(Request $request, $id_produk){
        $produk = produk::where('id_produk', $id_produk)->first();

        if($request->jumlah > $produk->stok_produk){
            return redirect('/produkadm/'.$id_produk);
        }

        $cek = Pesanan::where('id_user')->where('status', 'keranjang')->first();

        if(empty($cek)){
            $pesanan = new Pesanan; 
            $pesanan->id_user;
            // $pesanan->first_name;
            // $pesanan->last_name; 
            $pesanan->total_harga_produk = $produk->harga_produk*$request->jumlah;
            // $pesanan->id_kelurahan;
            // $pesanan->id_pengiriman;
            // $pesanan->id_metode;
            $pesanan->status; 
            $pesanan-> created_at;
            $pesanan->save();
        }
        
        $pesanan_baru = Pesanan::where('id_user')->where('status', 'keranjang')->first();

        $cek_detail  = Pesanan_detail::where('id_produk', $produk->id_produk)->where('id_pesanan', $pesanan_baru->id_pesanan)->first();
        if(empty($cek_detail)){
            $pesanan_detail = new Pesanan_detail; 
            $pesanan_detail->id_produk = $produk->id_produk;
            $pesanan_detail->id_pesanan = $pesanan_baru->id_pesanan;
            $pesanan_detail->jumlah = $request->jumlah;
            $pesanan_detail->jumlah_harga = $produk->harga_produk*$request->jumlah;
            $pesanan_detail->save();
        }
        else{
            $pesanan_detail = Pesanan_detail::where('id_produk', $produk->id_produk)->where('id_pesanan', $pesanan_baru->id_pesanan)->first();
            $pesanan_detail->jumlah =  $pesanan_detail->jumlah+$request->jumlah;
            $harga_detail_baru = $produk->harga_produk*$request->jumlah;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_detail_baru;
            $pesanan_detail->update();
        }
        

        //$pesanan = Pesanan::where('id_user')->where('status', 'keranjang')->first();
        // $pesanan->total_harga_produk = $pesanan->total_harga_produk+$produk->harga_produk*$request->jumlah;
        // $pesanan->update();
        //SweetAlert::success('Produk berhasil ditambahkan ke keranjang', 'Success');
        Alert::success('Berhasil', 'Produk Perhasil Ditambahkan ke keranjang');
        return redirect('/user/produk');


    }

    public function keranjang(){
        $produk = DB::table('produks')->get();
        $pesanan = Pesanan::where('id_user')->where('status', 'keranjang')->first();
        if(!empty($pesanan)){
            $pesanan_detail = Pesanan_detail::where('id_pesanan', $pesanan->id_pesanan)->get();
        }
        //$pesanan_detail = Pesanan_detail::where('id_pesanan', $pesanan->id_pesanan)->get();

        if(!empty($pesanan)){
            return view('user.keranjang', compact('pesanan', 'pesanan_detail'));
        }

        return view('user.keranjang', compact('pesanan', ));
    }

    public function delete($id){
        $pesanan_detail = Pesanan_detail::where('id', $id)->first();
        $pesanan_detail->delete();
        return redirect('/keranjang');
    }

    public function inputpsn(){
        $user = User::all();
        $metode = metodebayar::all();
        $pengiriman = jenispengiriman::all();
        $provinsi = Provinsi::all();
        $kota = Kabkot::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $kodepos = Kelurahan::all();
        $produk = DB::table('produks')->get();
        $pesanan = Pesanan::where('id_user')->where('status', 'keranjang')->first();
        if(!empty($pesanan)){
            $pesanan_detail = Pesanan_detail::where('id_pesanan', $pesanan->id_pesanan)->get();
        }
        

        return view('pesanan.checkout', compact('pesanan', 'pesanan_detail', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos', 'user', 'metode', 'pengiriman'));
    }

    public function inputpesan(Request $post){
        $produk = DB::table('produks')->get();
        $pesanan = Pesanan::where('id_user')->where('status', 'keranjang')->first();
        

        //$cek = Pesanan::where('id_user')->where('status', 'keranjang')->first();

        
        DB::table('pesanans')->where('id_pesanan', 'PSN00004')->update([
                    'id_user' => $post->id_user,
                    'first_name' => $post->first_name,
                    'last_name' => $post->last_name,
                    'alamat' => $post->alamat,
                    'id_kelurahan' => $post->kel_s,
                    'id_pengiriman' => $post->id_pengiriman,
                    'id_metode' => $post->id_metode,
        ]);
        
        $pesanan_detail = Pesanan_detail::where('id_pesanan', $pesanan->id_pesanan)->get();

        return redirect('/cekot/konfirmasipage');
    }

    public function findKota(Request $request)
    {
        $data = Kabkot::select('id_kota', 'nama_kota')
        ->where('id_provinsi',$request->prov_id)
        ->get();
        return response()->json($data);
    }

    public function findKecamatan(Request $request)
    {
        $data = Kecamatan::select('id_kecamatan', 'nama_kecamatan')
        ->where('id_kota',$request->kota_id)
        ->get();
        return response()->json($data);
    }

    public function findKelurahan(Request $request)
    {
        $data = Kelurahan::select('id_kelurahan', 'nama_kelurahan')
        ->where('id_kecamatan',$request->kec_id)
        ->get();
        return response()->json($data);
    }

    public function findKodepos(Request $request)
    {
        $data = Kelurahan::select('id_kelurahan', 'kodepos')
        ->where('id_kelurahan',$request->kel_id)
        ->get();
        return response()->json($data);
    }

    public function konfirmasipage(){
        $user = User::all();
        $pesanan = Pesanan::where('id_user')->where('status', 'keranjang')->first();
        if(!empty($pesanan)){
            $pesanan_detail = Pesanan_detail::where('id_pesanan', $pesanan->id_pesanan)->get();
        }
        //$pesanan_detail = Pesanan_detail::where('id_pesanan', $pesanan->id_pesanan)->get();
        $metode = metodebayar::all();
        $pengiriman = jenispengiriman::all();
        $kelurahan = Kelurahan::all();
        $kodepos = Kelurahan::all();
        $produk = DB::table('produks')->get();

        return view('pesanan.konfirmpesan', compact('pesanan',   'kelurahan', 'kodepos', 'user', 'metode', 'pengiriman'));



    }
    public function konfirmasi(Request $post){
        $pesanan = Pesanan::where('id_user')->where('status', 'keranjang')->first();
        DB::table('pesanans')->where('id_user', 'USER0002')->update([
            'status' => $post->status = 'pesanan',
        ]);
        Alert::success('Pemesanan berhasil', 'Silahkan Lakukan pembayaran');
        return redirect('/pembayaran');
    }

    


}
