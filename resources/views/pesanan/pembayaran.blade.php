@extends('pesanan.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
      <div class="card text-center">
        <div class="card-header">
      <div class="row">
        @foreach ($metodebayar as $data)
        <div class="col-sm-6">
          
          <div class="card">
            <div class="card-body">
              <h5 style="font-size:30px" class="card-title">{{$data->nama_metode}}</h5>
              <p style="font-size:15px" class="card-text">Silahkan lakukan pembayaran dengan transfer ke no rekenening dibawah ini</p>
              <p style="font-weight:bold; font-size:25px" class="card-text">{{$data->norekening}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">Upload Bukti Pembayaran</h5>
          <p class="card-text">Silahkan upload bukti pembayaran disini</p>
          <input type="file" class="form-control image" name="gambar_produk">
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
  </div>
  <!-- end produk terbaru -->
        <!-- end kategori produk -->
  </section>
</div>
@endsection