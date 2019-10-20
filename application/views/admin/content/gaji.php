<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-1 text-gray-800">Gaji</h1>
  <p class="mb-4">Gaji karyawan dihitung otomatis, apabila ada perubahan jumlah mohon diubah di konfigurasi karyawan</p>
  <!-- Content Row -->
  <div class="row">

    <!-- Grow In Utility -->
    <div class="col-lg-6">

      <div class="card position-relative">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Hitung Gaji Karyawan</h6>
        </div>
        <div class="card-body">
          <!-- <div class="mb-3">

          </div> -->
          <nav class="navbar navbar-expand navbar-light bg-light mb-4">
            <a class="navbar-brand">Pilih karyawan</a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <select class="nav-link dropdown-toggle" name="pegawai">
                  <option disabled selected>Pilih Karyawan</option>
                  <?php
                  foreach ($pegawai as $key) {?>
                  <option type="button" class="dropdown-item" id="<?=$key->pegawai_id?>"><?=$key->nama?></option>
                  <?php }
                  ?>
                </select>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar-expand navbar-light bg-light mb-4">
            <a class="navbar-brand">Periode</a>
            <ul class="navbar-nav ml-auto">
              <input type="date" name="" value=""> -   <input type="date" name="" value="">
            </ul>
          </nav>
          <nav class="navbar navbar-expand navbar-light bg-light mb-4">
            <a class="navbar-brand">Tunjangan</a>
            <ul class="navbar-nav ml-auto">
              <div class="flex">
              <span class="currency">Rp</span>
              <input id="tunjangan" name="tunjangan" type="number" maxlength="15" />
          </div>
            </ul>
          </nav>
          <nav class="navbar navbar-expand navbar-light bg-light mb-4">
            <a class="navbar-brand">Sisa Bon</a>
            <ul class="navbar-nav ml-auto">
              <div class="flex">
              <span class="currency">Rp</span>
              <input id="sisa_bon" disabled name="sisa_bon" type="number" maxlength="15" />
          </div>
            </ul>
          </nav>
          <nav class="navbar navbar-expand navbar-light bg-light mb-4">
            <a class="navbar-brand">Pengurangan Bon</a>
            <ul class="navbar-nav ml-auto">
              <div class="flex">
              <span class="currency">Rp</span>
              <input id="pengurangan_bon" name="pengurangan_bon" type="number" maxlength="15" />
          </div>
            </ul>
          </nav>
          <p class="mb-0 small">Note: Lakukan pengubahan berkala menurut UMR atau standar gaji karyawan. </p>
        </div>
      </div>

    </div>

    <!-- Fade In Utility -->
    <div class="col-lg-6">

      <div class="card position-relative">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Absen Karyawan</h6>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <code>.animated--fade-in</code>
          </div>
          <div class="small mb-1">Navbar Dropdown Example:</div>
          <nav class="navbar navbar-expand navbar-light bg-light mb-4">
            <a class="navbar-brand" href="#">Navbar</a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">


                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </nav>
          <div class="small mb-1">Dropdown Button Example:</div>
          <div class="dropdown mb-4">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <p class="mb-0 small">Note: This utility animates the CSS opacity property, meaning it will override any existing opacity on an element being animated!</p>
        </div>
      </div>

    </div>

  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
