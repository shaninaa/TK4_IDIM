@extends('user.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
        <div class="section-header text-center" >
            <h1 class="text-center">Produk</h1>
        </div>
        <!-- produk Terbaru-->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
            </div>
            <!-- produk pertama -->
            @foreach($produk as $data)
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <a href="/produkadm/{{$data->id_produk}}">
                        <img src="{{ asset('storage/' . $data->gambar_produk)}}" height="150">
                    </a>
                    <div class="card-body">
                    <a href="/produkadm/{{$data->id_produk}}" class="text-decoration-none">
                        <p class="card-text">
                            {{ $data->nama_produk}}
                        </p>
                    </a>
                    <div class="row mt-4">
                        <div class="col">
                        <button href="/produkadm/{{$data->id_produk}}" class="btn btn-light">
                            <i  class="fas fa-shopping-cart"></i>                        
                        </button>
                        </div>
                        <div class="col-auto">
                        <p>
                            Rp. {{ number_format( $data->harga_produk)}}
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div> 
  </div>
  <!-- end produk terbaru -->
        <!-- end kategori produk -->
  </section>
</div>
@endsection