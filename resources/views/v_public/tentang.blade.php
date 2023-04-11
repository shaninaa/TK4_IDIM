@extends('layoutpublic.mainlayout2')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
        <div class="section-header">
            <h1>Tentang Kami</h1>
        </div>
        <div class="card">
            <div class="card-header">
              <h4>UD. Sulfi Jaya</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Alamat Toko</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Jam Buka Toko</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    Kami merupakan store di bidang penjualan alat listrik dan bangunan   serta ada tamabahan perlengkapan kebutuhan yang lainnya, dengan harga yang sangat terjangkau sekali sangat di minati orang dewasa sebagai kebutuhan untuk rumah tangga untuk membantu aktivitas sehari sehari, Kami juga selalu memberi pelayanan yang sangat baik dan membuat pasti merasa sangat puas dengan product kami, dapat bersaing dengan dengan store dibidang penjual alat listrik  dan bahan bangunan yang lainnya kami berdiri sejak tahun 2008.
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    Jalan Rajawali No.115 ABE
                    Kemayoran
                    Krembangan
                    Kota Surabaya
                    Jawa Timur 60176
                    Indonesia      
                    <br>
                    Hubungi Kami: 0822-3069-4330          
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    Sen:	08.00–19.00
                    <br>
                    Sel:	08.00–19.00
                    <br>
                    Rab:	08.00–19.00
                    <br>
                    Kam:	08.00–19.00
                    <br>
                    Jum:	08.00–19.00
                    <br>
                    Sab:	08.00–19.00
                    <br>
                    Min:	08.00–19.00
                </div>
              </div>
            </div>
          </div>
    </div>
  </section>
</div>
@endsection