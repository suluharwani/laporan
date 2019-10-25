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
              <select class="nav-link dropdown-toggle" id="id_karyawan"  name="pegawai">
                <option disabled selected>Pilih Karyawan</option>
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
          <a class="navbar-brand">Periode</a>
          <ul class="navbar-nav ml-auto">
            <input type="date" name="tanggal_awal" id="tanggal_awal" > - <input type="date" name="tanggal_akhir" id="tanggal_akhir" >
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
        <button id="btn_cari_presensi" class="btn btn-info btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-info-circle"></i>
          </span>
          <span class="text">Tampilkan Presensi</span>
        </button>
        <button  class="btn btn-success btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-check"></i>
          </span>
          <span class="text">Hitung Gaji</span>
        </button>
        <button class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-print"></i>
          </span>
          <span class="text">Cetak</span>
        </button>
        <div class="my-2"></div>
        <p class="mb-0 small">Note: Lakukan pengubahan berkala menurut UMR atau standar gaji karyawan. </p>
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
<!-- End of Main Content -->
<script type="text/javascript" charset="utf-8" async defer>
$(document).ready(function() {
  $('#btn_cari_presensi').on('click',function(){
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
          }else if (presensi[i].selisih_masuk == 0 || presensi[i].selisih_pulang == 0 ) {
              validasi_absen = '<font color="#ffcc00">Peringatan Presensi Belum Valid</font>';
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
          '</tr>';
        }
        lap = html;
        $('#show_data_presensi_bulan_ini').html(lap);
        // $('#tabel_presensi').DataTable({
        //   "pageLength": 50000,
        //   dom: 'Bfrtip',
        //   buttons: [
        //   'copy', 'csv', 'excel', 'pdf', 'print'
        //   ]
        // });
      }
    });
  });
  // show_product();

} );
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
