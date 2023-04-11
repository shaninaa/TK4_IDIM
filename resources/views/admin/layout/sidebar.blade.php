<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/admin">UD. Sulfi Jaya</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/admin">SJ</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item">
            <a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-archive"></i><span>Data Produk</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/jenis') }}" class="nav-link">Kategori Produk</a></li>
              <li><a href="{{ URL::to('/produkadm') }}" class="nav-link">Produk</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-archive"></i><span>Data Customer</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/customer') }}" class="nav-link">Customer</a></li>
              <li><a href="{{ URL::to('/pesanan') }}" class="nav-link">Pesanan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link"><i class="fa fa-power-off"></i><span>Sign Out</span></a>
          </li>
      </ul>
    </aside>
</div>