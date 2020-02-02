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
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Pelapor</a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <select class="nav-link dropdown-toggle" id="id_karyawan"  name="pegawai">
                <option disabled selected>Pilih Nama</option>
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
              <input id="id_user_kasir" name="id_user_kasir" type="text"  style="text-transform:uppercase" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Periode</a>
          <ul class="navbar-nav ml-auto">
            <input type="date" name="tanggal_laporan" id="tanggal_laporan" >
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Pendapatan Kasir</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="pendapatan_kasir" name="pendapatan_kasir" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Kas Masuk(Tambahan Modal)</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="kas_masuk" name="kas_masuk" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Selisih</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="selisih" name="selisih" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Total Pengeluaran</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="total_pengeluaran" name="total_pengeluaran" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Total Setor(Saldo Masuk)</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="total_setor" name="total_setor" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Setor Ratusan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_ratusan" name="setor_ratusan" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Setor Puluhan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_puluhan" name="setor_puluhan" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-8">
          <a class="navbar-brand">Setor Koin</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_koin" name="setor_koin" type="number" maxlength="15" />
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
                <input type="date" name="tanggal_awal" id="tanggal_awal" > - <input type="date" name="tanggal_akhir" id="tanggal_akhir" >
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
<div class="modal fade" id="modal_edit_presensi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div>
<!-- End of Main Content -->
<div class="modal fade" id="Modal_gaji" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <!--  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">×</button> -->
        <h3 class="modal-title" id="myModalLabel">Faktur</h3>
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
  <!-- modal delete laporan -->
  <script src="<?=base_url('assets/sb/')?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url('assets/sb/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?=base_url('assets/sb/')?>js/demo/datatables-demo.js"></script>
  <script>
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
    //document.getElementById("printableArea").style.margin = "-50px 0px 0px 0px";
    var printContents = document.getElementById(divName).innerHTML;
    //var headstr = "<html><head></head><body style='margin-top:-5000px;'>";
    //var footstr = "</body></html>";

    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    mywindow=window.print();

    document.body.innerHTML = originalContents;
  }
</script>
<script type="text/javascript" charset="utf-8" async defer>
show_laporan();
show_rekap();
function show_laporan(){
  $.ajax({
    type  : 'ajax',
    url   : "<?php echo base_url('admin/laporan_kasir_list')?>",
    async : false,
    dataType : 'json',
    success : function(data){
      var html = '';
      var i;
      for(i=0; i<data.length; i++){
        no = i+1;
        // if (data[i].status == 1) {
        //   status_kerja = '<font color="green">Aktif<font/>';
        // }else if (data[i].status == 2) {
        //   status_kerja = '<font color="yellow">Cuti<font/>';
        // }else if (data[i].status == 3) {
        //   status_kerja = '<font color="red">Resign<font/>';
        // }else{
        //   status_kerja = '<font color="blue">Belum Ada<font/>';
        // }
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
        '<a href="javascript:void(0);" class="btn btn-danger btn-sm hapus_laporan" tanggal_laporan="'+data[i].tanggal_laporan+'"  id_laporan="'+data[i].id+'" id_kasir="'+data[i].id_user_kasir+'">Hapus Data</a>'+
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
    url   : "<?php echo base_url('admin/laporan_kasir_list_rekap')?>",
    async : false,
    dataType : 'json',
    success : function(data){
      var html = '';
      var total_pendapatan = 0;
      var total_kas_masuk = 0;
      var total_pengeluaran_kasir = 0;
      var total_tambahan_modal = 0;
      var total_selisih = 0;
      var i;
      for(i=0; i<data.length; i++){
        no = i+1;
        total_pendapatan += parseInt(data[i].pendapatan_kasir);
        total_kas_masuk += parseInt(data[i].total_setor);
        total_pengeluaran_kasir += parseInt(data[i].total_pengeluaran);
        total_tambahan_modal += parseInt(data[i].kas_masuk);
        total_selisih += parseInt(data[i].selisih);
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
    url  : "<?php echo site_url('admin/hapus_laporan_kasir')?>",
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
$('#pendapatan_kasir,#selisih,#total_pengeluaran,#total_setor,#setor_ratusan,#setor_puluhan,#setor_koin,#kas_masuk').on('keydown click change keyup paste blur load keyup',function(){
  var pendapatan_kasir = $('#pendapatan_kasir').val() || 0 ;
  var selisih = $('#selisih').val() || 0 ;
  var kas_masuk = $('#kas_masuk').val() || 0 ;
  var total_pengeluaran = $('#total_pengeluaran').val() || 0 ;
  var total_setor = $('#total_setor').val() || 0 ;
  var setor_ratusan = $('#setor_ratusan').val() || 0 ;
  var setor_puluhan = $('#setor_puluhan').val() || 0 ;
  var setor_koin = $('#setor_koin').val() || 0 ;
  var selisih_penghitungan = parseInt(pendapatan_kasir)+parseInt(kas_masuk)-total_pengeluaran-total_setor;
  var selisih_setor = total_setor-setor_ratusan-setor_puluhan-setor_koin;
  $('[name="selisih_setor"]').val(selisih_setor);
  $('[name="selisih_penghitungan"]').val(selisih_penghitungan);
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
  var id_karyawan = $('#id_karyawan').val() || 0 ;
  var id_user_kasir = $('#id_user_kasir').val() || 0 ;
  var tanggal_laporan = $('#tanggal_laporan').val() ;
  $.ajax({
    type : "POST",
    url  : "<?php echo site_url('admin/tambah_laporan_kasir')?>",
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
      swal ( "Gagal" ,  "Data Gagal Ditambahkan!" ,  "error",  {
        buttons: false,
        timer: 1000,
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
function convertToRupiah(angka)
{
  var rupiah = '';
  var angkarev = angka.toString().split('').reverse().join('');
  for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
  return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}
</script>
