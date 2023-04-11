@extends('layoutpublic.mainlayout2')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
        <!-- kategori produk -->
        <div class="section-header">
            <h1>Kategori Produk</h1>
        </div>
        <div class="row mt-4">
            <!-- kategori pertama -->
            @foreach($jenisproduk as $data)
            <div class="col-md-3">
                  <div class="card mb-4 shadow-sm">
                      <div class="card-body">
                          <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                          <p class="card-text" style="text-align:center">{{ $data->nama_jenis}}</p>
                          </a>
                      </div>
                  </div>
            </div>
            @endforeach
          </div>
        <!-- end kategori produk -->
  </section>
</div>
@endsection