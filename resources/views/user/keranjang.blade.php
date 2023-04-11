@extends('user.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Check Out</h3>
              </div>
            <div class="card-body">
                @if(!empty($pesanan))
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanan_detail as $data)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $data->produk->nama_produk}}</td>
                        <td>{{ $data->jumlah}}</td>
                        <td>Rp. {{ number_format($data->produk->harga_produk) }}</td>
                        <td>Rp. {{ number_format($data->jumlah_harga)}}</td>
                        <td>
                            <form action="/keranjang/{{$data->id}}" method='POST' class="form-inline">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button style="float: right;" class="fa fa-trash btn btn-sm btn-danger mr-2 mb-2"></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" align="right">Total</td>
                        <td>Rp. {{ number_format($pesanan->total_harga_produk)}}</td>
                    </tr>
                    
                       
                </tbody>
                </table>
            </div>
            
            </div>
            <a href="/cekot" type="button" class="btn btn-primary position-relative"><i class="fa fa-shopping-cart"></i>
                CHECK OUT
                {{-- <button href="/cekot" type="button" class="btn btn-primary btn-lg btn-block">Check out</button> --}}
            </a>
            @else
            <h4 align="center">Tambahkan Barang ke keranjang</h4>
            @endif
        </div>
        
    </div>
  <!-- end produk terbaru -->
        <!-- end kategori produk -->
  </section>
</div>
@endsection