<link href="<?=base_url('assets/sb/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Posisi</th>
              <th>Kontak</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Posisi</th>
              <th>Kontak</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody id="karyawan_list">
          </tbody>
        </table>
      </div>
    </div>
  </div>


<!-- End of Main Content -->
<!-- Modal Tunjangan-->
<div class="modal fade" id="modal_tunjangan_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tunjangan <span id="nama_karyawan"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Tunjangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id_karyawan" hidden>
              <input type="text" class="form-control" id="nama_tunjangan" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tunjangan</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="jumlah_tunjangan" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col text-center">
              <button type="button" class="btn btn-primary" id="tambah_tunjangan">Tambah</button>
            </div>
          </div>
        </form>
        <fieldset class="form-group">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Tunjangan</th>
                    <th>Nominal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Tunjangan</th>
                    <th>Nominal</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody id="data_tunjangan">
                </tbody>
              </table>
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <label for="jatah_libur" class="col-sm-6 col-form-label">Total Tunjangan Bulanan</label>
          <div class="col-sm-6" form-row>
            <input type="text" class="form-control" id="total_tunjangan_bulanan" disabled>
            <span id="total_tunjangan_bulanan_terbilang"></span>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- end modal Tunjangan -->

<!-- modal delete tunjangan -->
<div class="modal fade" id="modal_hapus_tunjangan_karyawan" tabindex="-1" role="dialog" aria-labelledby="modal_hapus_tunjangan" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_hapus_tunjangan">Hapus Tunjangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hapus tunjangan <span id="nama_nominal_tunjangan_hapus"></span>?
        <input type="text" name="" id="id_tunjangan_karyawan" hidden>
        <input type="text" name="" id="id_karyawan_tunjangan" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-danger confirm_hapus_tunjangan">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- modal delete tunjangan -->
<!-- Modal -->
<div class="modal fade" id="modal_gaji_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Gaji <span id="gaji_nama_karyawan"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Gaji Pokok</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="gaji_pokok" >
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Sisa Bon</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="sisa_bon" disabled>
            </div>
          </div>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Shift 1</legend>
              <div class="col-sm-10 form-row">
                <div class="form-group col-md-6">
                  <input type="time" class="form-control" id="shiftmasuk1">
                </div>
                <div class="form-group col-md-6">
                  <input type="time" class="form-control" id="shiftpulang1">
                </div>
              </div>
            </fieldset>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Shift 2</legend>
                <div class="col-sm-10 form-row">
                  <div class="form-group col-md-6">
                    <input type="time" class="form-control" id="shiftmasuk2">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="time" class="form-control" id="shiftpulang2">
                  </div>
                </div>
              </fieldset>
              <div class="form-group row">
                <label for="jatah_libur" class="col-sm-2 col-form-label">Jatah Libur/Bulan</label>
                <div class="col-sm-4" form-row>
                  <input type="number" class="form-control" id="jatah_libur" placeholder="...Hari">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary" id="simpan_data_karyawan">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    <!-- end modal -->
    <!-- Modal -->
    <div class="modal fade" id="modal_info_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Informasi Tentang <span id="info_nama_karyawan"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                <label for="masuk_kerja" class="col-sm-2 col-form-label">Masuk Kerja</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="masuk_kerja" >
                  <input type="hidden" class="form-control" id="id_pegawai_info" hidden>
                </div>
              </div>
              <div class="form-group row">
                <label for="berhenti_kerja" class="col-sm-2 col-form-label">Sampai</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="berhenti_kerja" >
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="posisi">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Kontak</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="kontak">
                </div>
              </div>
                  <div class="form-group row">
                    <label for="jatah_libur" class="col-sm-2 col-form-label">Status Kerja</label>
                    <div class="col-sm-6" form-row>
                      <select class="form-control" name="status" id="status">
                        <option value="" selected disabled>Status</option>
                        <option value="1">Aktif</option>
                        <option value="2">Cuti</option>
                        <option value="3">Resign</option>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="simpan_data_karyawan_info">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
        <!-- end modal -->
    <script src="<?=base_url('assets/sb/')?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/sb/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/sb/')?>js/demo/datatables-demo.js"></script>
    <script>

    show_karyawan();
    function show_karyawan(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/karyawan_list')?>",
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            no = i+1;
            if (data[i].status == 1) {
              status_kerja = '<font color="green">Aktif<font/>';
            }else if (data[i].status == 2) {
              status_kerja = '<font color="yellow">Cuti<font/>';
            }else if (data[i].status == 3) {
              status_kerja = '<font color="red">Resign<font/>';
            }else{
              status_kerja = '<font color="blue">Belum Ada<font/>';
            }
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].nama+'</td>'+
            '<td>'+data[i].posisi+'</td>'+
            '<td>'+data[i].kontak+'</td>'+
            '<td>'+status_kerja+'</td>'+
            '<td style="text-align:center;">'+
            '<a href="javascript:void(0);" class="btn btn-primary btn-sm karyawan_tunjangan"  karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Tunjangan</a>'+
            '<a href="javascript:void(0);" class="btn btn-warning btn-sm karyawan_gaji" gaji_pokok="'+data[i].gaji_pokok+'" jatah_libur = "'+data[i].jatah_libur+'" jatah_libur_id = "'+data[i].jatah_libur_id+'" pulang2 = "'+data[i].pulang2+'" pulang1 = "'+data[i].pulang1+'" masuk2 = "'+data[i].masuk2+'" masuk1 = "'+data[i].masuk1+'" id_shift = "'+data[i].shift_id+'" karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Gaji&Shift</a>'+
            '<a href="javascript:void(0);" class="btn btn-info btn-sm karyawan_informasi" karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Informasi</a>'+
            '</td>'+
            '</tr>';
          }
          $('#karyawan_list').html(html);
        }
      });
    }
    $('#modal_info_karyawan').on('hidden.bs.modal',function(){
      $('#status').val('');
      $('#id_pegawai_info').val('');
      $('#posisi').val('');
      $('#masuk_kerja').val('');
      $('#kontak').val('');
      $('#berhenti_kerja').val('');
    });
    $('#simpan_data_karyawan_info').on('click',function(){
      var status = $('#status').val();
      var id_pegawai = $('#id_pegawai_info').val();
      var posisi = $('#posisi').val();
      var kontak = $('#kontak').val();
      var masuk_kerja = $('#masuk_kerja').val();
      var berhenti_kerja = $('#berhenti_kerja').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/simpan_data_karyawan_info')?>",
        // dataType : "JSON",
        data : {kontak:kontak,status:status,id_pegawai:id_pegawai,posisi:posisi,masuk_kerja:masuk_kerja,berhenti_kerja:berhenti_kerja},
        success: function(data){
          swal ( "Sukses" ,  "Data Berhasil Diupdate!" ,  "success", {
            buttons: false,
            timer: 1000,
          } );
          show_karyawan();
        }
      });
      return false;
    });
    $('#karyawan_list').on('click','.karyawan_informasi',function(){
      var id = $(this).attr('karyawan_id');
      var nama = $(this).attr('karyawan_nama');
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/get_info_karyawan')?>",
        dataType : "JSON",
        data : {id:id},
        success: function(data){
          var id_pegawai = data[0].id_pegawai;
          var posisi = data[0].posisi;
          var kontak = data[0].kontak;
          var status = data[0].status;
          var masuk = data[0].masuk;
          var kontak = data[0].kontak;
          var berhenti = data[0].berhenti;

          $('#status').val(status);
          $('#posisi').val(posisi);
          $('#masuk_kerja').val(masuk);
          $('#kontak').val(kontak);
          $('#berhenti_kerja').val(berhenti);
        }
      });
      $('#id_pegawai_info').val(id);
      $('#info_nama_karyawan').html(nama);
      $('#modal_info_karyawan').modal('show');
        // $('#modal_info_karyawan').modal('show');
        return false;
    });
    $('#karyawan_list').on('click','.karyawan_gaji',function(){
      var id = $(this).attr('karyawan_id');
      var nama = $(this).attr('karyawan_nama');
      var masuk1 = $(this).attr('masuk1');
      var masuk2 = $(this).attr('masuk2');
      var pulang1 = $(this).attr('pulang1');
      var pulang2 = $(this).attr('pulang2');
      var jatah_libur = $(this).attr('jatah_libur');
      var gaji_pokok = $(this).attr('gaji_pokok');
      $('#id_karyawan').val(id);
      $('#gaji_nama_karyawan').html(nama);
      $('#shiftpulang1').val(pulang1);
      $('#shiftpulang2').val(pulang2);
      $('#shiftmasuk1').val(masuk1);
      $('#shiftmasuk2').val(masuk2);
      $('#jatah_libur').val(jatah_libur);
      $('#gaji_pokok').val(gaji_pokok);
      $('#modal_gaji_karyawan').modal('show');
    });
    $('#simpan_data_karyawan').on('click',function(){
      var id = $('#id_karyawan').val();
      // var nama = $('#nama_karyawan').val();
      var shiftpulang1 = $('#shiftpulang1').val();
      var shiftpulang2 = $('#shiftpulang2').val();
      var shiftpulang1 = $('#shiftpulang1').val();
      var shiftmasuk1 = $('#shiftmasuk1').val();
      var shiftmasuk2 = $('#shiftmasuk2').val();
      var jatah_libur = $('#jatah_libur').val();
      var gaji_pokok = $('#gaji_pokok').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/simpan_data_karyawan')?>",
        // dataType : "JSON",
        data : {gaji_pokok:gaji_pokok,jatah_libur:jatah_libur,id:id,shiftpulang1:shiftpulang1,shiftpulang2:shiftpulang2,shiftmasuk1:shiftmasuk1,shiftmasuk2:shiftmasuk2},
        success: function(data){
          swal ( "Sukses" ,  "Data Berhasil Diupdate!" ,  "success", {
            buttons: false,
            timer: 1000,
          } );
          show_karyawan();
        }
      });
      return false;
    });

    function archiveFunction() {
      event.preventDefault(); // prevent form submit
      var form = event.target.form; // storing the form
      swal({
        title: "Apakah anda yakin?",
        text: "But you will still be able to retrieve this file.",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, archive it!",
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
          form.submit();          // submitting the form when user press yes
        } else {
          swal("Cancelled", "Data masih aman :)", "error");
        }
      });
    }
    $('#karyawan_list').on('click','.karyawan_tunjangan',function(){
      var id = $(this).attr('karyawan_id');
      var nama = $(this).attr('karyawan_nama');
      show_tunjangan(id);
      $('#id_karyawan').val(id);
      $('#nama_karyawan').html(nama);
      $('#modal_tunjangan_karyawan').modal('show');
    });
    $('#tambah_tunjangan').on('click',function(){
      var id = $('#id_karyawan').val();
      var nama = $('#nama_tunjangan').val();
      var jumlah = $('#jumlah_tunjangan').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/tambah_tunjangan')?>",
        dataType : "JSON",
        data : {id:id, nama:nama,jumlah:jumlah},
        success: function(data){
          show_tunjangan(id);
          swal ( "Sukses" ,  "Tunjangan Berhasil Ditambahkan!" ,  "success", {
            buttons: false,
            timer: 1000,
          } );
        }
      });
      return false;
    });


    function show_tunjangan(id){
      $.ajax({
        type  : 'POST',
        url   : "<?php echo base_url('admin/tunjangan_list')?>",
        dataType : 'json',
        data : {id:id},
        success : function(data){
          var html = '';
          var jumlah_nominal = 0;
          var i;
          for(i=0; i<data.length; i++){
            jumlah_nominal+=parseFloat(data[i].nominal);
            no = i+1;
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].nama_tunjangan+'</td>'+
            '<td>'+convertToRupiah(data[i].nominal)+'</td>'+
            '<td style="text-align:center;">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm tunjangan_delete" id_karyawan_tunjangan="'+id+'" tunjangan_id="'+data[i].id+'" nominal_tunjangan="'+data[i].nominal+'" nama_tunjangan="'+data[i].nama_tunjangan+'">Hapus</a>'+'</td>'+
            '</tr>';
          }
          $('#data_tunjangan').html(html);
          $('#total_tunjangan_bulanan').val(convertToRupiah(jumlah_nominal));
          $('#total_tunjangan_bulanan_terbilang').html(sayit(jumlah_nominal));
        }
      });
    }
    $('#data_tunjangan').on('click','.tunjangan_delete',function(){
      var id = $(this).attr('tunjangan_id');
      var id_karyawan = $(this).attr('id_karyawan_tunjangan');
      var nama_tunjangan = $(this).attr('nama_tunjangan');
      var nominal = $(this).attr('nominal_tunjangan');
      // $('#id_karyawan').val(id);
      $('#nama_nominal_tunjangan_hapus').html(nama_tunjangan+' senilai '+convertToRupiah(nominal)+'');
      $('#id_tunjangan_karyawan').val(id);
      $('#id_karyawan_tunjangan').val(id_karyawan);
      $('#modal_hapus_tunjangan_karyawan').modal('show');
    });
    $('.confirm_hapus_tunjangan').on('click',function(){
      var id = $('#id_tunjangan_karyawan').val();
      var id_karyawan = $('#id_karyawan_tunjangan').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/hapus_tunjangan')?>",
        dataType : "JSON",
        data : {id:id},
        success: function(data){
          $('#modal_hapus_tunjangan_karyawan').modal('hide');
          show_tunjangan(id_karyawan);
          swal ( "Sukses" ,  "Tunjangan Berhasil Dihapus!" ,  "success", {
            buttons: false,
            timer: 1000,
          } );
        }
      });
      return false;
    });

    var thoudelim=".";
    var decdelim=",";
    var curr="Rp ";
    var d=document;

    // format(1000000.5,3) : 1.000.000,500
    // format(1000000.55555,3) : 1.000.000,556

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

    // 1 SEN = 1/100 RUPIAH = 0.01 RUPIAH

    // sayit(1000000) : SATU JUTA RUPIAH
    // sayit(1000000.5) = 1000000.50 : SATU JUTA RUPIAH LIMA PULUH SEN
    // sayit(1000000.05) : SATU JUTA RUPIAH LIMA SEN
    // sayit(1000000.11) : SATU JUTA RUPIAH SEBELAS SEN
    // sayit(1000000.55555) = 1000000.56 : SATU JUTA RUPIAH LIMA PULUH ENAM SEN

    function sayit(s) {
      var thousand=Array("","Ribu","Juta","Milyar","Trilyun","Quadrilyun","Quintillion","Sextillion","Septillion","Octillion");
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
    </script>
