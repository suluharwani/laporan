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

</div>
<!-- /.container-fluid -->

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
              <button type="button" class="btn btn-primary tambah_tunjangan">Tambah</button>
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
            <input type="number" class="form-control" id="total_tunjangan_bulanan" disabled>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- end modal Tunjangan -->
<!-- Modal -->
<div class="modal fade" id="modal_gaji_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Gaji <span id="nama_karyawan"></span></h5>
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
              <div class="form-group row">
                <div class="col-sm-2">Checkbox</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      Example checkbox
                    </label>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
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
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].nama+'</td>'+
            '<td>'+data[i].posisi+'</td>'+
            '<td>'+data[i].kontak+'</td>'+
            '<td>'+data[i].status+'</td>'+
            // '<td>'+ status_contact +'</td>'+
            '<td style="text-align:center;">'+
            '<a href="javascript:void(0);" class="btn btn-primary btn-sm karyawan_tunjangan" karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Tunjangan</a>'+
            '<a href="javascript:void(0);" class="btn btn-warning btn-sm karyawan_gaji" pulang2 = "'+data[i].pulang2+'" pulang1 = "'+data[i].pulang1+'" masuk2 = "'+data[i].masuk2+'" masuk1 = "'+data[i].masuk1+'" id_shift = "'+data[i].shift_id+'" karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Gaji&Shift</a>'+
            '<a href="javascript:void(0);" class="btn btn-info btn-sm karyawan_informasi" karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Informasi</a>'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm karyawan_delete" karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Hapus</a>'+
            '<a href="javascript:void(0);" class="btn btn-success btn-sm karyawan_aktivasi" karyawan_id="'+data[i].id+'" karyawan_nama="'+data[i].nama+'">Aktifkan</a>'+
            '</td>'+
            '</tr>';
          }
          $('#karyawan_list').html(html);

        }

      });
    }
    $('#karyawan_list').on('click','.karyawan_gaji',function(){
      var id = $(this).attr('karyawan_id');
      var nama = $(this).attr('karyawan_nama');
      var masuk1 = $(this).attr('masuk1');
      var masuk2 = $(this).attr('masuk2');
      var pulang1 = $(this).attr('pulang1');
      var pulang2 = $(this).attr('pulang2');
      $('#id_karyawan').val(id);
      $('#nama_karyawan').html(nama);
      $('#shiftpulang1').val(pulang1);
      $('#shiftpulang2').val(pulang2);
      $('#shiftmasuk1').val(masuk1);
      $('#shiftmasuk2').val(masuk2);
      $('#modal_gaji_karyawan').modal('show');
    });
    $('#karyawan_list').on('click','.karyawan_tunjangan',function(){
      var id = $(this).attr('karyawan_id');
      var nama = $(this).attr('karyawan_nama');
      show_tunjangan(id)
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
          show_tunjangan();
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
          var i;
          for(i=0; i<data.length; i++){
            no = i+1;
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].nama_tunjangan+'</td>'+
            '<td>'+data[i].nominal+'</td>'+
            '<td style="text-align:center;">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm tunjangan_delete" tunjangan_id="'+data[i].id+'" nama_tunjangan="'+data[i].nama_tunjangan+'">Hapus</a>'+'</td>'+
            '</tr>';
          }
          $('#data_tunjangan').html(html);
        }
      });
    }
    </script>
