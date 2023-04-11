
@extends('pesanan.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" align="center">Konfirmasi Pesanan Anda</h5>
                    <p class="card-text" align="center">untuk melanjutkan proses pesanan silahkan klik tombol konfirmasi dibawah ini</p>
                    <form action="/cekot/konfirmasipage" method='POST'>
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Lanjutkan Ke Pembayaran</button>
                    </form>
                    {{-- <a href="/cekot/konfirmasi" type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-credit-card"></i>
                        Lanjutkan Ke Pembayaran
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


