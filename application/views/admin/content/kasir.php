<style type="text/css" media="print">
@media print {
  a[href]:after {
    content: none !important;
  }
}
}
</style>
<link href="<?=base_url('assets/sb/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-1 text-gray-800">Laporan Kasir</h1>
  <p class="mb-4">Laporan pendapatan dan pengeluaran kasir harian</p>
  <!-- Content Row -->
  <div class="row">

    <!-- Grow In Utility -->
    <div class="col-lg-7">

      <div class="card position-relative">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Laporan Kasir</h6>
        </div>
        <div class="card-body">
          <!-- <div class="mb-3">
        </div> -->
        <form id='inputform'>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Pelapor</a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <select class="nav-link dropdown-toggle" id="id_karyawan"  name="pegawai">
                <option disabled selected data-index="1">Pilih Nama</option>
                <?php
                foreach ($pegawai as $key) {?>
                  <option type="button" class="dropdown-item" value="<?=$key->pegawai_id?>"><?=$key->nama?></option>
                <?php }
                ?>
              </select>
            </li>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">ID Kasir</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Id</span>
              <input id="id_user_kasir" data-index="2" name="id_user_kasir" type="text"  style="text-transform:uppercase" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Periode</a>
          <ul class="navbar-nav ml-auto">
            <input type="date" data-index="3" name="tanggal_laporan" id="tanggal_laporan" >
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Pendapatan Kasir</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="pendapatan_kasir" data-index="4" name="pendapatan_kasir" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_pendapatan_kasir"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Kas Masuk(Tambahan Modal)</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="kas_masuk" data-index="5" name="kas_masuk" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_kas_masuk"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Selisih</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="selisih" data-index="6" name="selisih" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_selisih"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Total Setor(Saldo Masuk)</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="total_setor" data-index="7" name="total_setor" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_total_setor"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Total Pengeluaran</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="total_pengeluaran" data-index="8" name="total_pengeluaran" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_total_pengeluaran"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Setor Ratusan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_ratusan" data-index="9" name="setor_ratusan" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_setor_ratusan"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Setor Puluhan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_puluhan" data-index="10" name="setor_puluhan" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_setor_puluhan"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Setor Koin</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_koin" data-index="11" name="setor_koin" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <ul class="navbar-nav ml-auto">
            <div class="flex">
          <span class="text-light bg-info" id="convertRp_setor_koin"></span>
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Selisih Setor</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="selisih_setor" name="selisih_setor" disabled type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Selisih Penghitungan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="selisih_penghitungan" disabled name="selisih_penghitungan" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <!-- <button id="btn_check_selisih" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
        <i class="fas fa-info-circle"></i>
      </span>
      <span class="text">Check Selisih</span>
    </button> -->
    <button id="simpan"   class="btn btn-success btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Simpan</span>
    </button>
    <!-- <button class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
    <i class="fas fa-print"></i>
  </span>
  <span class="text" id="cetak_gaji">Cetak</span>
</button> -->
</form>
<div class="my-2"></div>
<p class="mb-0 small">Note: Diisi setiap kasir tutup </p>
<p class="mb-0 small">Yang mengisi adalah kasir atau pengawas </p>
<p class="mb-0 small">Selisih harus 0 </p>
</div>
</div>
</div>
<!-- Fade In Utility -->
<div class="col-lg-5">
  <div class="card position-relative">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Rincian 1 Hari</h6>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <div class="box-body no-padding">
          <div class="container">
            <h2>Rekap Tanggal <span id='tgl_akhir'></span></h2>
            <p>Rekap Laporan Data Terakhir</p>
            <table class="table">
              <thead>
                <tr>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody id="data_rekap">

              </tbody>
            </table>
          </div>

          <!-- /.row -->
        </div>
        <p class="mb-0 small">Note: Tabel hanya menunjukkan data terakhir. Untuk mencetak laporan silakan tentukan tanggal dan pilih cetak.</p>
      </div>
    </div>
  </div>
  <div class="card position-relative">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan</h6>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <div class="box-body no-padding">
          <div class="container">
            <h2>Cetak Laporan</h2>
            <p>Cetak laporan per tanggal</p>
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
              <ul class="navbar-nav ml-auto">
                <input type="date" name="tanggal_awal_laporan" id="tanggal_awal_laporan" > - <input type="date" name="tanggal_akhir_laporan" id="tanggal_akhir_laporan" >
              </ul>
            </nav>
            <button id="btn_cari_laporan" class="btn btn-info btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-info-circle"></i>
              </span>
              <span class="text">Cetak</span>
            </button>
          </div>

          <!-- /.row -->
        </div>
        <p class="mb-0 small">Note: Cetak dengan printer atau simpan sebagai .PDF</p>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="card position-relative">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Setor Kasir</h6>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <div class="box-body no-padding">
          <div class="table-responsive" >
            <table class="table table-bordered table-striped" id="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id Kasir</th>
                  <th>Tanggal</th>
                  <th>Pendapatan</th>
                  <th>Tambahan Modal</th>
                  <th>Pengeluaran</th>
                  <th>Saldo Masuk</th>
                  <th>Selisih</th>
                  <th>Pelapor</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="show_data_laporan">
              </tbody>
            </table>
          </div>
          <!-- /.row -->
        </div>
        <p class="mb-0 small">Note: Tabel hanya menunjukkan 10 data terakhir</p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- <div class="modal fade" id="modal_edit_presensi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Presensi tanggal <span id="tanggal_presensi_karyawan1"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="masuk_kerja" class="col-sm-2 col-form-label">Masuk Kerja</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="masuk_kerja" >
              <input type="hidden" class="form-control" id="presensi_id" hidden>
              <input type="hidden" class="form-control" id="tanggal_presensi_karyawan" hidden>
            </div>
          </div>
          <div class="form-group row">
            <label for="berhenti_kerja" class="col-sm-2 col-form-label">Pulang</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="pulang_kerja" >
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="simpan_presensi_karyawan">Simpan</button>
      </div>
    </div>
  </div>
</div> -->
<!-- End of Main Content -->
  <!-- modal delete laporan -->
  <div class="modal fade" id="modal_hapus_laporan" tabindex="-1" role="dialog" aria-labelledby="modal_hapus_tunjangan" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_hapus_laporan">Hapus Laporan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Hapus Laporan Kasir <span id="id_kasir_hps"></span>, <span id="tanggal_laporan_hps"></span>?
          <input type="text" name="" id="id_laporan_hps" hidden>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-danger confirm_hapus_laporan">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  <!-- print -->
  <div class="modal fade" id="Modal_Faktur" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
         <!--  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">×</button> -->
         <h3 class="modal-title" id="myModalLabel">Laporan Kasir</h3>
       </div>
       <form class="form-horizontal">
        <div class="modal-body">
         <x id="faktur_print">
         </div>
         <div class="modal-footer">
          <input type="button" class="btn" id="print_nota" onclick="printDiv('printableArea')" value="print Nota!" />

          <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
        </div>
      </form>
    </div>
  </div>
  </div>

  <!-- print -->
  <!-- modal delete laporan -->
  <script src="<?=base_url('assets/sb/')?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url('assets/sb/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?=base_url('assets/sb/')?>js/demo/datatables-demo.js"></script>
  <script>
  $('#inputform').on('keydown', 'input', function (event) {
    if (event.which == 13) {
        event.preventDefault();
        var $this = $(event.target);
        var index = parseFloat($this.attr('data-index'));
        $('[data-index="' + (index + 1).toString() + '"]').focus();
    }
});
  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth() + 1;
  var year = date.getFullYear();
  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;
  var today = year + "-" + month + "-" + day;
  document.getElementById('tanggal_laporan').value = today;
  var mywindow;
  function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;
   document.body.innerHTML = printContents;
   window.print();
   document.body.innerHTML = originalContents;
 }
</script>
<script type="text/javascript" charset="utf-8" async defer>
$('#btn_cari_laporan').on('click',function(){
  var tanggal_awal = $('#tanggal_awal_laporan').val();
  var tanggal_akhir = $('#tanggal_akhir_laporan').val();
  $.ajax({
    type : "POST",
    url  : "<?php echo site_url('index.php/admin/cari_laporan_kasir')?>",
    dataType : "JSON",
    data : {tanggal_awal:tanggal_awal,tanggal_akhir:tanggal_akhir},
    success: function(data){
      var logo = "<?=base_url('assets/logo/logo.png')?>";
      var test = 'aaa';
      var faktur_tabel_html = '';
      no = 1;
      var total_pendapatan = 0;
      var total_kas_masuk = 0;
      var total_pengeluaran_kasir = 0;
      var total_setor_kasir = 0;
      var total_selisih = 0;
      var nama_admin = "<?php if (isset($nama_admin)) {
        echo $nama_admin;
      } ?>";
      for(i=0; i<data.length; i++){
        faktur_tabel_html += '<tr>'+
        '<td>'+ no++ +'</td>'+
        '<td>'+data[i].id_user_kasir+'</td>'+
        '<td>'+date_ind(data[i].tanggal_laporan)+'</td>'+
        '<td>'+convertToRupiah(data[i].pendapatan_kasir)+'</td>'+
        '<td>'+convertToRupiah(data[i].kas_masuk)+'</td>'+
        '<td>'+convertToRupiah(data[i].total_pengeluaran)+'</td>'+
        '<td>'+convertToRupiah(data[i].total_setor)+'</td>'+
        '<td>'+convertToRupiah(data[i].selisih)+'</td>'+
        '<td>'+data[i].pelapor+'</td>'+
        '</tr>';
        total_pendapatan += parseInt(data[i].pendapatan_kasir);
        total_kas_masuk += parseInt(data[i].kas_masuk);
        total_pengeluaran_kasir += parseInt(data[i].total_pengeluaran);
        total_setor_kasir += parseInt(data[i].total_setor);
        total_selisih += parseInt(data[i].selisih);
      }
      faktur_header = '<div id="printableArea">'+
      '<div class="wrapper">'+
      '<section class="Laporan Kasir">'+
      '<div class="row">'+
      '<div class="col-xs-12">'+
      '<h2 class="page-header">'+
      '<img src="'+logo+'" height=180></i> </br>'+
      '<small> &nbsp; Tanggal: '+date_ind(Date.now())+'</small>'+
      '</h2>'+
      '</div>'+
      '</div>'+
      '<div class="row invoice-info">'+
      '<div class="col-sm-4 invoice-col">'+
      'From'+
      '<address>'+
      '<strong>Admin, '+nama_admin+'.</strong><br>'+
      'Phone: '+test+'<br>'+
      'Email: '+test+'<br>'+
      '</address>'+
      '</div>'+
      '<div class="col-sm-4 invoice-col">'+
      'To'+
      '<address>'+
      '<strong>'+test+'</strong><br>'+
      ''+test+'<br>'+
      'Phone: '+test+'<br>'+
      'Email: '+test+'<br>'+
      '</address>'+
      '</div>'+
      '<div class="col-sm-4 invoice-col">'+
      '<b>Invoice #'+test+'</b><br>'+
      '<br>'+
      '<b>Nota:</b>Asli<br>'+
      '</div>'+
      '</div>'+
      '<div class="row">'+
      '<div class="col-xs-12 table-responsive">'+
      '<table class="table table-striped">'+
      '<thead>'+
      '<tr>'+
      '<th>No</th>'+
      '<th>Id Kasir</th>'+
      '<th>Tanggal</th>'+
      '<th>Pendapatan</th>'+
      '<th>Tambahan Modal</th>'+
      '<th>Pengeluaran</th>'+
      '<th>Saldo Masuk</th>'+
      '<th>Selisih</th>'+
      '<th>Pelapor</th>'+
      '</tr>'+
      '</thead>'+
      '<tbody>';
      faktur_footer ='</tbody>'+
      '</table>'+
      '</div>'+
      '</div>'+
      '<div class="row">'+
      '<div class="col-xs-12">'+
      ' <p class="text-muted well well-sm no-shadow" style="margin-top: 20px;">'+
      '</div>'+
      ' <div class="col-xs-12">'+
      '<div class="table-responsive">'+
      ' <table class="table">'+
      '<tr>'+
      '<th style="width:60%">Total Pendapatan:</th>'+
      '<td>'+convertToRupiah(total_pendapatan)+'</td>'+
      '</tr>'+
      '<tr>'+
      '<th>Total Modal Masuk:</th>'+
      '<td>'+convertToRupiah(total_kas_masuk)+'</td>'+
      '</tr>'+
      '<tr>'+
      '<th>Total Pengeluaran Kasir:</th>'+
      ' <td>'+convertToRupiah(total_pengeluaran_kasir)+'</td>'+
      '</tr>'+
      '<tr>'+
      '<th>Total Setor Kasir:</th>'+
      ' <td>'+convertToRupiah(total_setor_kasir)+'</td>'+
      '</tr>'+
      '<tr>'+
      '<th>Total Selisih Kasir Kasir:</th>'+
      ' <td>'+convertToRupiah(total_selisih)+'</td>'+
      '</tr>'+
      '</table>'+
      ' </div>'+
      ' </div>'+
      '</div>'+
      '</section>'+
      '</div>'+
      '</div>';
      faktur_print = ''+faktur_header+''+faktur_tabel_html+''+faktur_footer+'';

      $('#faktur_header').html(faktur_header);
      $('#faktur_tabel').html(faktur_tabel_html);
      $('#faktur_footer').html(faktur_footer);
      $('#faktur_id').val('kode_faktur');
      $('#faktur_print').html(faktur_print);
      $('#Modal_Faktur').modal('show');
    },
    error: (function(data) {
      swal ( "Gagal" ,  "Laporan Gagal Ditampilkan!" ,  "error",  {
        buttons: false,
        timer: 1000,
      } );
    })
  });
  return false;
});
show_laporan();
show_rekap();
function show_laporan(){
  $.ajax({
    type  : 'ajax',
    url   : "<?php echo base_url('index.php/admin/laporan_kasir_list')?>",
    async : false,
    dataType : 'json',
    success : function(data){
      var html = '';
      var i;
      for(i=0; i<data.length; i++){
        no = i+1;
        html += '<tr>'+
        '<td>'+ no++ +'</td>'+
        '<td>'+data[i].id_user_kasir+'</td>'+
        '<td>'+date_ind(data[i].tanggal_laporan)+'</td>'+
        '<td>'+convertToRupiah(data[i].pendapatan_kasir)+'</td>'+
        '<td>'+convertToRupiah(data[i].kas_masuk)+'</td>'+
        '<td>'+convertToRupiah(data[i].total_pengeluaran)+'</td>'+
        '<td>'+convertToRupiah(data[i].total_setor)+'</td>'+
        '<td>'+convertToRupiah(data[i].selisih)+'</td>'+
        '<td>'+data[i].pelapor+'</td>'+
        '<td style="text-align:center;">'+
        '<a href="javascript:void(0);" class="btn btn-danger btn-sm hapus_laporan" tanggal_laporan="'+data[i].tanggal_laporan+'"  id_laporan="'+data[i].id+'" id_kasir="'+data[i].id_user_kasir+'">Hapus</a>'+
        '</td>'+
        '</tr>';
      }
      $('#show_data_laporan').html(html);
    }
  });
}
function show_rekap(){
  $.ajax({
    type  : 'ajax',
    url   : "<?php echo base_url('index.php/admin/laporan_kasir_list_rekap')?>",
    async : false,
    dataType : 'json',
    success : function(data){
      var html = '';
      var total_pendapatan = 0;
      var total_kas_masuk = 0;
      var total_pengeluaran_kasir = 0;
      var total_tambahan_modal = 0;
      var total_ratusan = 0;
      var total_puluhan = 0;
      var total_koin = 0;
      var total_selisih = 0;
      var i;
      for(i=0; i<data.length; i++){
        no = i+1;
        total_pendapatan += parseInt(data[i].pendapatan_kasir);
        total_kas_masuk += parseInt(data[i].total_setor);
        total_pengeluaran_kasir += parseInt(data[i].total_pengeluaran);
        total_tambahan_modal += parseInt(data[i].kas_masuk);
        total_selisih += parseInt(data[i].selisih);
        total_ratusan += parseInt(data[i].setor_ratusan);
        total_puluhan += parseInt(data[i].setor_puluhan);
        total_koin += parseInt(data[i].setor_koin);
      }
      html =
      '<tr>'+
      '<td>Pendapatan</td>'+
      '<td>'+ convertToRupiah(total_pendapatan) +'</td>'+
      '</tr>'+
      '<tr>'+
      '<td>Tambahan Modal</td>'+
      '<td>'+ convertToRupiah(total_tambahan_modal) +'</td>'+
      '</tr>'+
      '<tr>'+
      '<td>Saldo Masuk</td>'+
      '<td>'+ convertToRupiah(total_kas_masuk) +'</td>'+
      '</tr>'+
      '<tr>'+
      '<td>Ratusan</td>'+
      '<td>'+ convertToRupiah(total_ratusan) +'</td>'+
      '</tr>'+
      '<tr>'+
      '<td>Puluhan</td>'+
      '<td>'+ convertToRupiah(total_puluhan) +'</td>'+
      '</tr>'+
      '<tr>'+
      '<td>Koin</td>'+
      '<td>'+ convertToRupiah(total_koin) +'</td>'+
      '</tr>'+
      '<tr>'+
      '<td>Pengeluaran Kasir</td>'+
      '<td>'+ convertToRupiah(total_pengeluaran_kasir) +'</td>'+
      '</tr>'+
      '<tr>'+
      '<td>Selisih kasir</td>'+
      '<td>'+ convertToRupiah(total_selisih) +'</td>'+
      '</tr>';
      $('#data_rekap').html(html);
      $('#tgl_akhir').html('<?=$tanggal_terakhir?>');

    }
  });
}
$('#show_data_laporan').on('click','.hapus_laporan',function(){
  var id = $(this).attr('id_laporan');
  var id_kasir = $(this).attr('id_kasir');
  var tanggal_laporan = $(this).attr('tanggal_laporan');
  // $('#id_karyawan').val(id);
  $('#id_laporan_hps').val(id);
  $('#id_kasir_hps').html(id_kasir);
  $('#tanggal_laporan_hps').html(date_ind(tanggal_laporan));
  $('#modal_hapus_laporan').modal('show');
});
$('.confirm_hapus_laporan').on('click',function(){
  var id = $('#id_laporan_hps').val();
  $.ajax({
    type : "POST",
    url  : "<?php echo site_url('index.php/admin/hapus_laporan_kasir')?>",
    dataType : "JSON",
    data : {id:id},
    success: function(data){
      $('#modal_hapus_laporan').modal('hide');
      show_laporan();
      show_rekap()
      swal ( "Sukses" ,  "Laporan Berhasil Dihapus!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
    },
    error: (function(data) {
      show_laporan();
      show_rekap();
      swal ( "Gagal" ,  "Laporan Gagal Dihapus!" ,  "error",  {
        buttons: false,
        timer: 1000,
      } );
    })
  });
  return false;
});
$('#pendapatan_kasir,#selisih,#total_setor,#setor_ratusan,#total_pengeluaran,#setor_puluhan,#setor_koin,#kas_masuk').on('keydown update click change keyup paste blur load',function(){
  var pendapatan_kasir = $('#pendapatan_kasir').val() || 0 ;
  var selisih = $('#selisih').val() || 0 ;
  var kas_masuk = $('#kas_masuk').val() || 0 ;
  var total_pengeluaran = $('#total_pengeluaran').val() || 0 ;
  var total_setor = $('#total_setor').val() || 0 ;
  var setor_ratusan = $('#setor_ratusan').val() || 0 ;
  var setor_puluhan = $('#setor_puluhan').val() || 0 ;
  var setor_koin = $('#setor_koin').val() || 0 ;
  var selisih_penghitungan = parseInt(pendapatan_kasir)-parseInt(kas_masuk)-total_pengeluaran-total_setor;
  var selisih_setor = total_setor-setor_ratusan-setor_puluhan-setor_koin;
  var total_pengeluaran_def = parseInt(pendapatan_kasir) - parseInt(kas_masuk) - parseInt(total_setor);
  $('[name="total_pengeluaran"]').val(total_pengeluaran_def)
  $('[name="selisih_setor"]').val(selisih_setor);
  $('[name="selisih_penghitungan"]').val(selisih_penghitungan);
  $('#convertRp_pendapatan_kasir').html(convertToRupiah(pendapatan_kasir));
  // $('#nominal_pendapatan_kasir').html(convertToRupiah(pendapatan_kasir));
  $('#convertRp_selisih').html(convertToRupiah(selisih));
  $('#convertRp_kas_masuk').html(convertToRupiah(kas_masuk));
  $('#convertRp_total_pengeluaran').html(convertToRupiah(total_pengeluaran));
  $('#convertRp_total_setor').html(convertToRupiah(total_setor));
  $('#convertRp_setor_ratusan').html(convertToRupiah(setor_ratusan));
  $('#convertRp_setor_puluhan').html(convertToRupiah(setor_puluhan));
  $('#convertRp_setor_koin').html(convertToRupiah(setor_koin));
});
$('#simpan').on('click',function(){
  var pendapatan_kasir = $('#pendapatan_kasir').val() || 0 ;
  var selisih = $('#selisih').val() || 0 ;
  var kas_masuk = $('#kas_masuk').val() || 0 ;
  var total_pengeluaran = $('#total_pengeluaran').val() || 0 ;
  var total_setor = $('#total_setor').val() || 0 ;
  var setor_ratusan = $('#setor_ratusan').val() || 0 ;
  var setor_puluhan = $('#setor_puluhan').val() || 0 ;
  var setor_koin = $('#setor_koin').val() || 0 ;
  var id_karyawan = $('#id_karyawan').val();
  var id_user_kasir = $('#id_user_kasir').val();
  var tanggal_laporan = $('#tanggal_laporan').val();
  $.ajax({
    type : "POST",
    url  : "<?php echo site_url('index.php/admin/tambah_laporan_kasir')?>",
    dataType : "JSON",
    data : {tanggal_laporan:tanggal_laporan,id_user_kasir:id_user_kasir,id_karyawan:id_karyawan,pendapatan_kasir:pendapatan_kasir,selisih:selisih,kas_masuk:kas_masuk,total_pengeluaran:total_pengeluaran,total_setor:total_setor,setor_ratusan:setor_ratusan,setor_puluhan:setor_puluhan,setor_koin:setor_koin},
    success: function(data){
      show_laporan();
      show_rekap();
      swal ( "Sukses" ,  "Laporan Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
      $('#pendapatan_kasir').val('');
      $('#selisih').val('');
      $('#kas_masuk').val('');
      $('#total_pengeluaran').val('');
      $('#total_setor').val('');
      $('#setor_ratusan').val('');
      $('#setor_puluhan').val('');
      $('#setor_koin').val('');
      $('#id_karyawan').val('');
      $('#id_user_kasir').val('');
      v$('#tanggal_laporan').val('');
      // show_presensi();
    },
    error: (function(data) {
      show_laporan();
      show_rekap();
      swal ( "Gagal" ,  'Data Gagal Ditambahkan! Pelapor dan ID kasir wajib diisi, Selisih Setor dan Penghitungan harus 0' ,  "error",  {
        buttons: false,
        timer: 7000,
      } );
    })
  });
  return false;
});
function date_ind(date_conv){
  var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
  var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
  var date = new Date(date_conv);
  var day = date.getDate();
  var month = date.getMonth();
  var thisDay = date.getDay(),
  thisDay = myDays[thisDay];
  var yy = date.getYear();
  var year = (yy < 1000) ? yy + 1900 : yy;
  var hasil = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
  return hasil;
}
function datediff(first, second) {
  return Math.round((second-first)/(1000*60*60*24));
}
function format(s,r) {
  s=Math.round(s*Math.pow(10,r))/Math.pow(10,r);
  s=String(s);s=s.split(".");var l=s[0].length;var t="";var c=0;
  while(l>0){t=s[0][l-1]+(c%3==0&&c!=0?thoudelim:"")+t;l--;c++;}
  s[1]=s[1]==undefined?"0":s[1];
  for(i=s[1].length;i<r;i++) {s[1]+="0";}
  return curr+t+decdelim+s[1];
}
function threedigit(word) {
  eja=Array("Nol","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan");
  while(word.length<3) word="0"+word;
  word=word.split("");
  a=word[0];b=word[1];c=word[2];
  word="";
  word+=(a!="0"?(a!="1"?eja[parseInt(a)]:"Se"):"")+(a!="0"?(a!="1"?" Ratus":"ratus"):"");
  word+=" "+(b!="0"?(b!="1"?eja[parseInt(b)]:"Se"):"")+(b!="0"?(b!="1"?" Puluh":"puluh"):"");
  word+=" "+(c!="0"?eja[parseInt(c)]:"");
  word=word.replace(/Sepuluh ([^ ]+)/gi, "$1 Belas");
  word=word.replace(/Satu Belas/gi, "Sebelas");
  word=word.replace(/^[ ]+$/gi, "");
  return word;
}
function sayit(s) {
  var thousand=Array("","Ribu","Juta","Milyar","Trilyun");
  s=Math.round(s*Math.pow(10,2))/Math.pow(10,2);
  s=String(s);s=s.split(".");
  var word=s[0];
  var cent=s[1]?s[1]:"0";
  if(cent.length<2) cent+="0";
  var subword="";i=0;
  while(word.length>3) {
    subdigit=threedigit(word.substr(word.length-3, 3));
    subword=subdigit+(subdigit!=""?" "+thousand[i]+" ":"")+subword;
    word=word.substring(0, word.length-3);
    i++;
  }
  subword=threedigit(word)+" "+thousand[i]+" "+subword;
  subword=subword.replace(/^ +$/gi,"");
  word=(subword==""?"NOL":subword.toUpperCase())+" RUPIAH";
  subword=threedigit(cent);
  cent=(subword==""?"":" ")+subword.toUpperCase()+(subword==""?"":" SEN");
  return word+cent;
}
function convertToRupiah(angka){
  var rupiah = '';
  var angkarev = angka.toString().split('').reverse().join('');
  for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
  return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}
$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
</script>
