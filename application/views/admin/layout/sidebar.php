
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetabledata" aria-expanded="true" aria-controls="collapsetabledata">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Tabel Data</span>
        </a>
        <div id="collapsetabledata" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            <a class="collapse-item" href="<?=base_url('index.php/admin/supplier')?>">Supplier</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/calendar')?>">Kalender</a>
            <!-- <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Grouping Barang</a> -->
            <!-- <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Departemen Barang</a> -->
            <!-- <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Sub Departemen</a> -->
            <!-- <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Account Cabang/Pusat</a> -->
            <!-- <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Daftar Kasir</a> -->
            <!-- <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Data Table/Lokasi</a> -->
            <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Setting Pajak</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/sales')?>">Sales</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Pengirim</a>
          </div>
        </div>
      </li>
      <!-- Heading -->
      <div class="sidebar-heading">
        Stock
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsmasterdatabarang" aria-expanded="true" aria-controls="collapsmasterdatabarang">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Master Data Barang</span>
        </a>
        <div id="collapsmasterdatabarang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Stock:</h6>
            <a class="collapse-item" href="<?=base_url('index.php/admin/kasir')?>">Barang</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/kas_masuk')?>">Barcode</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Laporan</a>
          </div>
        </div>
      </li> -->

      <!-- Heading -->
      <div class="sidebar-heading">
        Keuangan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>Saldo</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Saldo:</h6>
            <a class="collapse-item" href="<?=base_url('index.php/admin/kasir')?>">Kasir</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/kas_masuk')?>">Kas Masuk</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/fisik_uang')?>">Fisik</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Pengeluaran</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengeluaran:</h6>
            <a class="collapse-item" href="<?=base_url('index.php/admin/supplier')?>">Supplier</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/gaji')?>">Gaji</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/gaji')?>">Bon Karyawan</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/gaji')?>">Operasional</a>
            <a class="collapse-item" href="<?=base_url('index.php/admin/gaji')?>">Mutasi Kas</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Nota
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Nota Supplier</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Supplier:</h6>
            <a class="collapse-item" href="login.html">Cash</a>
            <a class="collapse-item" href="register.html">Konsinyasi</a>
            <a class="collapse-item" href="forgot-password.html">Kredit</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Karyawan
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/admin/karyawan')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Karyawan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Rumus Gaji</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
