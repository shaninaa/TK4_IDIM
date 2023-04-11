<body class="layout-3">
    <div id="app">
      <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <a href="index.html" class="navbar-brand sidebar-gone-hide">Profile</a>
            <div class="navbar-nav">
              <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
            </div>
            
            <form class="form-inline ml-auto">
              <ul class="navbar-nav">
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
              </ul>
              <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
                <div class="search-result">
                  <div class="search-header">
                    Histories
                  </div>
                  <div class="search-item">
                    <a href="#">How to hack NASA using CSS</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                  </div>
                  <div class="search-item">
                    <a href="#">Kodinger.com</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                  </div>
                  <div class="search-item">
                    <a href="#">#Stisla</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                  </div>
                  <div class="search-header">
                    Result
                  </div>
                  <div class="search-item">
                    <a href="#">
                      <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                      oPhone S9 Limited Edition
                    </a>
                  </div>
                  <div class="search-item">
                    <a href="#">
                      <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                      Drone X2 New Gen-7
                    </a>
                  </div>
                  <div class="search-item">
                    <a href="#">
                      <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                      Headphone Blitz
                    </a>
                  </div>
                  <div class="search-header">
                    Projects
                  </div>
                  <div class="search-item">
                    <a href="#">
                      <div class="search-icon bg-danger text-white mr-3">
                        <i class="fas fa-code"></i>
                      </div>
                      Stisla Admin Template
                    </a>
                  </div>
                  <div class="search-item">
                    <a href="#">
                      <div class="search-icon bg-primary text-white mr-3">
                        <i class="fas fa-laptop"></i>
                      </div>
                      Create a new Homepage Design
                    </a>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav navbar-right">
              <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                  <div class="dropdown-header">Notifications
                    <div class="float-right">
                      <a href="#">Mark All As Read</a>
                    </div>
                  </div>
                  <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-icon bg-primary text-white">
                        <i class="fas fa-code"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Template update is available now!
                        <div class="time text-primary">2 Min Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-info text-white">
                        <i class="far fa-user"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                        <div class="time">10 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-success text-white">
                        <i class="fas fa-check"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                        <div class="time">12 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-danger text-white">
                        <i class="fas fa-exclamation-triangle"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Low disk space. Let's clean it!
                        <div class="time">17 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-info text-white">
                        <i class="fas fa-bell"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Welcome to Stisla template!
                        <div class="time">Yesterday</div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </li>
              <li class="dropdown"><a href="#"  class="nav-link  nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class=" d-lg-inline-block">Hi, User</div></a>
              </li>
              {{-- @auth
              <li class="dropdown"><a href="#"  class="nav-link  nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class=" d-lg-inline-block">Hi, {{ auth()->user()->name }}</div></a>
              </li> 
              @endauth --}}
              
            </ul>
        </nav>
  
        <nav class="navbar navbar-secondary navbar-expand-lg">
          <div class="container">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a href="/user" class="nav-link"><i class="fa fa-home"></i><span>HOME</span></a>
              </li>
              <li class="nav-item active">
                <a href="/user/profile" class="nav-link"><i class="far fa-heart"></i><span>Profile</span></a>
              </li>
              <li class="nav-item active">
                <a href="/user/pesanan" class="nav-link"><i class="far fa-heart"></i><span>Pesananku</span></a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-right">
              <li class="nav-item active">
                <?php
                  $pesananutama = \App\Models\pesanan::where('id_user')->where('status', 'keranjang')->first();
                  if(!empty($pesananutama)){
                    $notif = \App\Models\pesanan_detail::where('id_pesanan', $pesananutama->id_pesanan)->count();
                  }
                  
                ?>
                <a href="/keranjang" type="button" class="btn btn-primary position-relative"><i class="fa fa-shopping-cart"></i>
                  Keranjangku
                  @if(!empty($notif))
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$notif}}
                  </span>
                  @endif
                </a>
            </li>
            </ul>
          </div>
        </nav>
  
        
        
        
      </div>
    </div>
  
    @include('user/layout/js')
  </body>
  </html>
  