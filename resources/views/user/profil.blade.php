@extends('user.layout.mainprofile')
@section('page_title','UD.Sulfi Jaya Shop')
@section('UD.Sulfi Jaya Shop','')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="container">
        <div class="section-header text-center" >
            <h1 class="text-center">Profil Saya</h1>
        </div>
        <div class="card">
            <div class="card-header">
              <h4>DATA DIRI</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                  <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Data Diri</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Alamat</a>
                    </li>
                    
                  </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                  <div class="tab-content no-padding" id="myTab2Content">
                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                        <form>
                            <div class="row">
                                <div class="form-group col-6 col-md-6 col-lg-6">
                                    <label for="exampleInputEmail1">First name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Shanin" readonly>
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                    <div class="form-group col-6 col-md-6 col-lg-6">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Prasesti" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telpon</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="08155542089977" readonly>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah data Diri</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Surabaya" readonly>
                            <small id="emailHelp" class="form-text text-muted"></small>
                            <button type="submit" class="btn btn-primary">Ubah Alamat</button>
                        </div>
                    </div>
                    
                  </div>
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