<html>
@extends('pesanan.layout.mainlayout')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  @if(!empty($pesanan))
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan_detail as $data)
                            <tr>
                                
                                <td>{{ $data->produk->nama_produk}}</td>
                                <td>{{ $data->jumlah}}</td>
                                <td>Rp. {{ number_format($data->produk->harga_produk) }}</td>
                                <td>Rp. {{ number_format($data->jumlah_harga)}}</td>
                                
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" align="right"><strong>Total Harga</td>
                                <td>Rp. {{ number_format($pesanan->total_harga_produk)}}</td>
                            </tr>
                            
                               
                        </tbody>
                        </table>
                        @endif
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <form action="/cekot" method='POST'>
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                      <div class="form-group">
                        <label style="font-weight:bold; font-size:15">Metode Pembayaran</label>
                        <select id="id"  class="form-control" name="id_metode" required>
                          <option value="" disabled selected></option>
                                  @foreach($metode as $key)
                                      <option value="{{ $key->id_metode }}">{{ $key->nama_metode }}</option>
                                  @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label style="font-weight:bold; font-size:15">Jenis Pengiriman</label>
                        <select id="id"  class="form-control" name="id_pengiriman" required>
                          <option value="" disabled selected></option>
                                  @foreach($pengiriman as $key)
                                      <option value="{{ $key->id_pengiriman }}">{{ $key->nama_pengiriman }}</option>
                                  @endforeach
                        </select>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                      <div class="card-body">
                        <div class="alert alert-info">
                          <b>Isikan Data Dengan Benar</b> 
                            </div>
                            <div class="form-group">
                              <label style="font-weight:bold; font-size:15">User</label>
                              <select class="form-control" name="id_user" required>
                                <option value="" disabled selected></option>
                                  @foreach($user as $key)
                                      <option value="{{ $key->id_user }}">{{ $key->name }}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="row">
                              <div class="form-group col-6 col-md-6 col-lg-6">
                                  <label style="font-weight:bold; font-size:15">First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="Enter Name">
                                </div>
                                <div class="form-group col-6 col-md-6 col-lg-6">
                                  <label style="font-weight:bold; font-size:15">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="form-group">
                              <label style="font-weight:bold; font-size:15">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Enter alamat">
                            </div>
                                <div class="row">
                                <div class="form-group col-6 col-md-6 col-lg-6">
                                  <label style="font-weight:bold; font-size:15">Provinsi</label>
                                    <select id="prov_s" name="prov_s" class="form-control" required>
                                      <option value="" disabled selected>Pilih provinsi</option>
                                      @foreach($provinsi as $key)
                                      <option value="{{ $key->id_provinsi }}">{{ $key->nama_provinsi }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-6 col-md-6 col-lg-6">
                                  <label style="font-weight:bold; font-size:15">Kota</label>
                                    <select id="kota_s" name="kota_s" class="form-control" required>
                                      <option value="" disabled selected>Pilih kota</option>
                                    </select>
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-6 col-md-6 col-lg-6">
                                  <label style="font-weight:bold; font-size:15">Kecamatan</label>
                                    <select id="kec_s" name="kec_s" class="form-control" required>
                                      <option value="" disabled selected>Pilih kecamatan</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-md-6 col-lg-6">
                                  <label style="font-weight:bold; font-size:15">Kelurahan</label>
                                    <select id="kel_s" name="kel_s" class="form-control" required>
                                      <option value="" disabled selected>Pilih kelurahan</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                  <label style="font-weight:bold; font-size:15">kodepos</label>
                                    <select name="kd_s" class="form-control" id="kd_s">
                                      <option value="0" disabled="true" selected="true">Pilih Kodepos</option>  
                                    </select>
                                </div>
                                <div class="card-footer text-right">
                                  <button class="btn btn-primary mr-1" type="submit" value="Simpan" >Pesan</button>
                              </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
  </div>
  <!-- end produk terbaru -->
        <!-- end kategori produk -->
  </section>
</div>
@endsection
@section('script')
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#prov_s").change(function(){
    var prov_id=$("#prov_s").val();
    $.ajax({
      type:"get",
      url:"findKota",
      data:"prov_id="+prov_id,
      success:function(data){
        $('#kota_s').html('');
        $('#kec_s').html('');
        $('#kel_s').html('');
        $('#kd_s').html('');
        $('#kota_s').append('<option value=""</option>');
        $('#kec_s').append('<option value=""</option>');
        $('#kel_s').append('<option value=""</option>');
        $('#kd_s').append('<option value=""</option>');
        for(var i=0;i<data.length;i++){
          $('#kota_s').append('<option value="'+data[i].id_kota+'">'+data[i].nama_kota+'</option>');
        } 
      }
      });
  });

  $("#kota_s").change(function(){
    var kota_id=$("#kota_s").val();
    $.ajax({
      type:"get",
      url:"findKecamatan",
      data:"kota_id="+kota_id,
      success:function(data){
        $('#kec_s').html('');
        $('#kel_s').html('');
        $('#kd_s').html('');
        $('#kec_s').append('<option value=""</option>');
        $('#kel_s').append('<option value=""</option>');
        $('#kd_s').append('<option value=""</option>');
        for(var i=0;i<data.length;i++){
          $('#kec_s').append('<option value="'+data[i].id_kecamatan+'">'+data[i].nama_kecamatan+'</option>');
        } 
      }
      });
  });

  $("#kec_s").change(function(){
    var kec_id=$("#kec_s").val();
    $.ajax({
      type:"get",
      url:"findKelurahan",
      data:"kec_id="+kec_id,
      success:function(data){
        $('#kel_s').html('');
        $('#kd_s').html('');
        $('#kel_s').append('<option value=""</option>');
        $('#kd_s').append('<option value=""</option>');
        for(var i=0;i<data.length;i++){
          $('#kel_s').append('<option value="'+data[i].id_kelurahan+'">'+data[i].nama_kelurahan+'</option>');
        } 
      }
      });
  });
  $("#kel_s").change(function(){
    var kel_id=$("#kel_s").val();
    $.ajax({
      type:"get",
      url:"findKodepos",
      data:"kel_id="+kel_id,
      success:function(data){
        $('#kd_s').html('');
        $('#kd_s').append('<option value=""</option>');
        for(var i=0;i<data.length;i++){
          $('#kd_s').append('<option value="'+data[i].id_kelurahan+'">'+data[i].kodepos+'</option>');
        } 
      }
      });
    });
});
</script>
@endsection
</html>