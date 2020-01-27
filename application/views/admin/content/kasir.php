<style type="text/css" media="print">
@media print {
  a[href]:after {
    content: none !important;
  }
}
}
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-1 text-gray-800">Laporan Kasir</h1>
  <p class="mb-4">Laporan pendapatan dan pengeluaran kasir harian</p>
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
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">ID Kasir</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Id</span>
              <input id="id_user_kasir" name="id_user_kasir" type="text" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Periode</a>
          <ul class="navbar-nav ml-auto">
            <input type="date" name="tanggal_laporan" id="tanggal_laporan" >
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Pendapatan Kasir</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="pendapatan_kasir" name="pendapatan_kasir" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Selisih</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="selisih" name="selisih" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Total Pengeluaran</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="pengeluaran" name="pengeluaran" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Total Setor</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor" name="setor" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Setor Ratusan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_ratusan" name="setor_ratusan" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Setor Puluhan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_puluhan" name="setor_puluhan" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Setor Koin</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="setor_koin" name="setor_koin" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Selisih Setor</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="selisih_setor" name="selisih_setor" disabled type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <nav class="navbar navbar-expand navbar-light bg-light mb-4">
          <a class="navbar-brand">Selisih Penghitungan</a>
          <ul class="navbar-nav ml-auto">
            <div class="flex">
              <span class="currency">Rp</span>
              <input id="diterima" disabled name="diterima" type="number" maxlength="15" />
            </div>
          </ul>
        </nav>
        <button id="btn_cari_presensi" class="btn btn-info btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-info-circle"></i>
          </span>
          <span class="text">Tampilkan Presensi</span>
        </button>
        <button id="btn_hitung_gaji"   class="btn btn-success btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-check"></i>
          </span>
          <span class="text">Hitung Gaji</span>
        </button>
        <button class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-print"></i>
          </span>
          <span class="text" id="cetak_gaji">Cetak</span>

        </button>
        <div class="my-2"></div>
        <p class="mb-0 small">Note: Lakukan pengubahan berkala menurut UMR atau standar gaji karyawan. </p>
        <p class="mb-0 small">*: Tidak wajib diisi. </p>
        <p class="mb-0 small">**: Otomatis, tidak boleh diganti, hanya diubah di <a href="<?=base_url('admin/karyawan')?>">Data karyawan</a> </p>
      </div>
    </div>
  </div>
  <!-- Fade In Utility -->
  <div class="col-lg-6">
    <div class="card position-relative">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Presensi Karyawan</h6>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <div class="box-body no-padding">
            <div class="table-responsive" >
              <table class="table table-bordered table-striped" id="tabel_presensi">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>validasi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="show_data_presensi_bulan_ini">
                </tbody>
              </table>
            </div>
            <!-- /.row -->
          </div>
          <p class="mb-0 small">Note: Edit dahulu presensi yang kosong agar penghitungan valid</p>
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


$(document).ready(function() {
  function show_presensi(){
    var id_karyawan = $('#id_karyawan').val();
    var tanggal_awal = $('#tanggal_awal').val();
    var tanggal_akhir = $('#tanggal_akhir').val();
    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('admin/get_tanggal_absen')?>",
      dataType : "JSON",
      data : {tanggal_awal:tanggal_awal, tanggal_akhir:tanggal_akhir,id_karyawan:id_karyawan},
      success: function(presensi){
        $('#show_data_presensi_bulan_ini').val("");
        var html = '';
        var i;
        var validasi_absen = "";
        var no = 1;
        for(i=0; i<presensi.length; i++){

          if (presensi[i].selisih_hari == 0 && (presensi[i].selisih_masuk == 0 && presensi[i].selisih_pulang == 0 ) ) {
            validasi_absen = '<font color="green">Presensi Valid</font>';
            edit = '';
          }else if (presensi[i].selisih_masuk == 0 || presensi[i].selisih_pulang == 0 ) {
            validasi_absen = '<font color="#ffcc00">Peringatan Presensi Belum Valid</font>';
            edit =   '<a href="javascript:void(0);" class="btn btn-primary btn-sm edit_presensi" tanggal_presensi = "'+presensi[i].tanggal+'" pulang="'+presensi[i].jam_pulang+'" masuk="'+presensi[i].jam_masuk+'" presensi_id="'+presensi[i].id_presensi+'" >Edit</a>';
          }
          else{
            validasi_absen = '<font color="red">Presensi Tidak Valid</font>';
          }
          html += '<tr>'+
          '<td>'+ no++ +'</td>'+
          '<td>'+presensi[i].tanggal+'</td>'+
          '<td>'+presensi[i].jam_masuk+'</td>'+
          '<td>'+presensi[i].jam_pulang+'</td>'+
          '<td>'+validasi_absen+'</td>'+
          '<td style="text-align:center;">'+
          edit
          +
          '</td>'+
          '</tr>';
        }
        lap = html;
        $('#show_data_presensi_bulan_ini').html(lap);
      }
    });
  }
  $('#btn_cari_presensi').on('click',function(){
    show_presensi()
  });
  $('#btn_hitung_gaji').on('click',function(){
    var id_karyawan = $('#id_karyawan').val();
    var tanggal_awal = $('#tanggal_awal').val();
    var tanggal_akhir = $('#tanggal_akhir').val();
    var bonus = $('#bonus').val();
    var pengurangan_bon = $('#pengurangan_bon').val();
    var denda = $('#denda').val();
    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('admin/hitung_gaji')?>",
      dataType : "JSON",
      data : {tanggal_awal:tanggal_awal, tanggal_akhir:tanggal_akhir,id_karyawan:id_karyawan},
      success: function(gaji){
        // var obj = JSON.parse(gaji);
        if (bonus=="") {
          bns = 0;
        }else {
          bns = parseInt(bonus);
        }
        $('#gaji_pokok').val(gaji['gaji_pokok']);
        $('#tunjangan').val(gaji['tunjangan']);
        $('#sisa_bon').val(gaji['sisa_bon']);
        $('#diterima').val(gaji['total']-pengurangan_bon-denda+bns);
      }
    });
  });


  $('#simpan_presensi_karyawan').on('click',function(){
    var id = $('#presensi_id').val();
    var masuk_kerja = $('#masuk_kerja').val();
    var pulang_kerja = $('#pulang_kerja').val();
    var tanggal_presensi = $('#tanggal_presensi_karyawan').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('admin/update_presensi_karyawan')?>",
      dataType : "JSON",
      data : {masuk_kerja:masuk_kerja,pulang_kerja:pulang_kerja,id:id,tanggal_presensi:tanggal_presensi},
      success: function(data){
        swal ( "Sukses" ,  "Data Berhasil Diupdate!" ,  "success", {
          buttons: false,
          timer: 1000,
        } );
        $('#modal_edit_presensi').modal('hide');
        show_presensi();
      }
    });
    return false;
  });

} );




$('#show_data_presensi_bulan_ini').on('click','.edit_presensi',function(){
  var id = $(this).attr('presensi_id');
  var masuk = $(this).attr('masuk');
  var pulang = $(this).attr('pulang');
  var tanggal_presensi = $(this).attr('tanggal_presensi');
  $('#tanggal_presensi_karyawan1').html(tanggal_presensi);
  $('#tanggal_presensi_karyawan').val(tanggal_presensi);
  $('#masuk_kerja').val(masuk);
  $('#pulang_kerja').val(pulang);
  $('#presensi_id').val(id);
  $('#modal_edit_presensi').modal('show');
});
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
