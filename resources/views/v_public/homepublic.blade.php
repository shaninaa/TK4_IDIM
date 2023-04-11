@extends('layoutpublic.mainlayout2')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<!DOCTYPE html>
<div class="main-content">
    <section class="section">
        <!-- carousel -->
        <div class="card">
            <div class="card-header">
              <h4 class="text-center">Toko Alat Listrik</h4>
            </div>
            <div class="card-body ">
              <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="1" class="active"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/img/1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/3.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        <!-- end carousel -->

        <!-- kategori produk -->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Kategori</h2>
            </div>
            
            <!-- kategori pertama -->
            @foreach($jenisproduk as $data)
          <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <a href="/login" class="text-decoration-none">
                        <p class="text-center" style="font-weight: bolder">{{ $data->nama_jenis}}</p>
                        </a>
                    </div>
                </div>
          </div>
          @endforeach
        </div>
        <!-- end kategori produk -->

        <!-- produk Terbaru-->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Terbaru</h2>
            </div>
            <!-- produk pertama -->
            @foreach($produk as $data)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <a href="/login">
                        <img src="{{ asset('storage/' . $data->gambar_produk)}}" height="100">
                    </a>
                    <div class="card-body">
                    <a href="/login" class="text-decoration-none">
                        <p class="card-text">
                            {{ $data->nama_produk}}
                        </p>
                    </a>
                    <div class="row mt-4">
                        <div class="col">
                        <button class="btn btn-light">
                            <i class="fas fa-shopping-cart"></i>                        </button>
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
            <!-- produk kedua -->
            
            <!-- produk ketiga -->
            
        </div>
        <!-- end produk terbaru -->
    </section>
</div>
</html>
@endsection