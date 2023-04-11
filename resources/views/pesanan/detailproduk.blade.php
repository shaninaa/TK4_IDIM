@extends('pesanan.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
        <div class="card mb-3" >
          <div class="row no-gutters">
            @foreach ($produk as $data)
            <div class="col-md-4">
              <img src="{{ asset('storage/' . $data->gambar_produk)}}" height="300">
            </div>
            @endforeach
            <div class="col-md-8">
              <div class="card-body">
                @foreach ($produk as $data)
                  <h5 class="card-title">{{$data->nama_produk}}</h5>
                  <p class="card-text">{{$data->deskripsi}}</p>
                  <p class="card-text">Stok: {{$data->stok_produk}}</p>
                  <p class="card-text">Harga: Rp. {{ number_format( $data->harga_produk)}}</p>
                
                <form action="/pesan/{{$data->id_produk}}" method='POST' class="form-inline">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                  <div class="form-group mb-2">
                    <p class="card-text">Jumlah</p>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                    <label class="sr-only">jumlah</label>
                    <input type="number" name="jumlah" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Tambah ke Keranjang</button>
                </form>
                @endforeach
              </div>
            </div>
          </div>
        </div> 
  </div>
  <!-- end produk terbaru -->
        <!-- end kategori produk -->
  </section>
</div>
@endsection