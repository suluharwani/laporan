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
  <h1 class="h3 mb-1 text-gray-800">Data Customer</h1>
  <p class="mb-4">Data Customer</p>
  <!-- Content Row -->
  <div class="row">

    <!-- Grow In Utility -->
    <div class="col-lg-7">

      <div class="card position-relative">
        <div class="card-header py-3">
          <div class="d-inline m-0 font-weight-bold text-primary">Daftar Customer</div>
          <div class="d-inline">
            <button class="btn btn-success float-right" data-toggle="modal" data-target="#modal_tambah_supplier">Tambah Supplier</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive" >
            <table id="mytable" class="display" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
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
          <h6 class="m-0 font-weight-bold text-primary">Rincian Supplier</h6>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <div class="box-body no-padding">
              <div class="container">
                <p>Rincian Supplier</p>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Variabel Supplier</th>
                      <th>Value</th>
                    </tr>
                  </thead>
                  <tbody id="data_sup_view">

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


  </div>
  <!-- /.container-fluid -->
</div>
<div class="modal fade" id="modal_edit_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="kode_supplier_edit" class="col-sm-2 col-form-label">Kode Supplier</label>
            <div class="col-sm-10">
              <input type="text" id="kode_supplier_edit" class="form-control" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_supplier_edit" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" id="nama_supplier_edit" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="kota_supplier_edit" class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
              <input type="text" id="kota_supplier_edit" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat_supplier_edit" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" id="alamat_supplier_edit" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="telepon_supplier_edit" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
              <input type="text" id="telepon_supplier_edit" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="catatan_supplier_edit" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="catatan_supplier_edit" rows="4"></textarea>
            </div>

          </div>
          <div class="form-group row">
            <label for="npwp_supplier_edit" class="col-sm-2 col-form-label">NPWP</label>
            <div class="col-sm-10">
              <input type="text" id="npwp_supplier_edit" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="simpan_data_supplier_edit">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<div class="modal fade" id="modal_tambah_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="kode_supplier" class="col-sm-2 col-form-label">Kode Supplier</label>
            <div class="col-sm-10">
              <input type="text" id="kode_supplier" class="form-control">
              <span id="check_kode_result"></span>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_supplier" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" id="nama_supplier" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="kota_supplier" class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
              <input type="text" id="kota_supplier" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat_supplier" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" id="alamat_supplier" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="telepon_supplier" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
              <input type="text" id="telepon_supplier" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="catatan_supplier" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="catatan_supplier" rows="4"></textarea>
            </div>

          </div>
          <div class="form-group row">
            <label for="npwp_supplier" class="col-sm-2 col-form-label">NPWP</label>
            <div class="col-sm-10">
              <input type="text" id="npwp_supplier" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="simpan_data_supplier">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<!-- modal delete laporan -->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalDelete">Hapus Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hapus supplier <span id="kode_hapus"></span>, <span id="nama_hapus"></span>?
        <input type="text" id="kode_hapus_supplier" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-danger confirm_hapus_supplier">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- print -->
<div class="modal fade" id="Modal_Faktur" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
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
  <script type="text/javascript">

  function show_data_dipilih(kode){
    $.ajax({
      type  : 'post',
      url   : "<?php echo base_url('admin/data_supplier_dipilih')?>",
      async : false,
      dataType : 'json',
      data : {kode:kode},
      success : function(data){
        var html = '';
        html =
        '<tr>'+
        '<td>Kode Supplier</td>'+
        '<td>'+ data[0].code +'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Nama</td>'+
        '<td>'+data[0].nama+'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Alamat</td>'+
        '<td>'+ data[0].kota +'-'+ data[0].alamat +'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Telepon</td>'+
        '<td>'+ data[0].telepon +'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Catatan</td>'+
        '<td>'+ data[0].catatan +'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Tanggal Buat</td>'+
        '<td>'+ data[0].tanggal +'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Operator</td>'+
        '<td>'+ data[0].operator +'</td>'+
        '</tr>';
        $('#data_sup_view').html(html);
      }
    });
  };

  $('#mytable').on('click','.view_record',function(){
    var kode=$(this).attr('kode');
    show_data_dipilih(kode);
  });
  $(document).ready(function(){
    $('#kode_supplier').keyup(function(){
      var kode_supplier = $('#kode_supplier').val();
      if(kode_supplier != ''){
        $.ajax({
          url: "<?php echo base_url(); ?>admin/check_kode_supplier",
          method: "POST",
          data: {kode_supplier:kode_supplier},
          success: function(data){
            $('#check_kode_result').html(data);
          }
        });
      }
    });
  });
  $(document).ready(function(){
    // Setup datatables
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
    {
      return {
        "iStart": oSettings._iDisplayStart,
        "iEnd": oSettings.fnDisplayEnd(),
        "iLength": oSettings._iDisplayLength,
        "iTotal": oSettings.fnRecordsTotal(),
        "iFilteredTotal": oSettings.fnRecordsDisplay(),
        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
      };
    };
    show_supplier();
    function show_supplier(){
      $("#mytable").dataTable({
        initComplete: function() {
          var api = this.api();
          $('#mytable_filter input')
          .off('.DT')
          .on('input.DT', function() {
            api.search(this.value).draw();
          });
        },
        oLanguage: {
          sProcessing: "Sedang memuat....."
        },
        processing: true,
        serverSide: true,
        ajax: {"url": "<?php echo base_url().'admin/get_supplier_json'?>", "type": "POST"},
        columns: [
          {"data": "codesup"},
          {"data": "nama"},
          //render number format for price
          // {"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
          {"data": "view"}
        ],
        order: [[1, 'asc']],
        rowCallback: function(row, data, iDisplayIndex) {
          var info = this.fnPagingInfo();
          var page = info.iPage;
          var length = info.iLength;
          $('td:eq(0)', row).html();
        },
        "bDestroy": true
      });
    };
    // endshow
    //hapus Supplier
    $('.confirm_hapus_supplier').on('click',function(){
      var kode_supplier = $('#kode_hapus_supplier').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/hapus_supplier')?>",
        // dataType : "JSON",
        data : {kode_supplier:kode_supplier},
        success: function(data){
          $('#ModalDelete').modal('hide');
          show_supplier();
          swal ( "Sukses" ,  "Supplier "+kode_supplier+" berhasil dihapus!" ,  "success", {
            buttons: false,
            timer: 3000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Supplier gagal dihapus!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
    });
    //edit Supplier
    $('#simpan_data_supplier_edit').on('click',function(){
      var kode_supplier = $('#kode_supplier_edit').val();
      var nama_supplier = $('#nama_supplier_edit').val();
      var alamat_supplier = $('#alamat_supplier_edit').val();
      var telepon_supplier = $('#telepon_supplier_edit').val();
      var catatan_supplier = $('#catatan_supplier_edit').val();
      var npwp_supplier = $('#npwp_supplier_edit').val();
      var kota_supplier = $('#kota_supplier_edit').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/edit_supplier')?>",
        // dataType : "JSON",
        data : {kota_supplier:kota_supplier,kode_supplier:kode_supplier, nama_supplier:nama_supplier, alamat_supplier:alamat_supplier, telepon_supplier:telepon_supplier, catatan_supplier:catatan_supplier, npwp_supplier:npwp_supplier},
        success: function(data){
          $('#modal_edit_supplier').modal('hide');
          show_supplier();
          swal ( "Sukses" ,  "Supplier "+kode_supplier+" berhasil diedit!" ,  "success", {
            buttons: false,
            timer: 3000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Supplier gagal diedit!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
    });
    //tambah Supplier
    $('#simpan_data_supplier').on('click',function(){
      var kode_supplier = $('#kode_supplier').val();
      var nama_supplier = $('#nama_supplier').val();
      var alamat_supplier = $('#alamat_supplier').val();
      var telepon_supplier = $('#telepon_supplier').val();
      var catatan_supplier = $('#catatan_supplier').val();
      var npwp_supplier = $('#npwp_supplier').val();
      var kota_supplier = $('#kota_supplier').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/tambah_supplier')?>",
        dataType : "JSON",
        data : {kota_supplier:kota_supplier,kode_supplier:kode_supplier, nama_supplier:nama_supplier, alamat_supplier:alamat_supplier, telepon_supplier:telepon_supplier, catatan_supplier:catatan_supplier, npwp_supplier:npwp_supplier},
        success: function(data){
          $('#modal_tambah_supplier').modal('hide');
          show_supplier();
          swal ( "Sukses" ,  "Supplier berhasil ditambahkan!" ,  "success", {
            buttons: false,
            timer: 1000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Supplier gagal ditambahkan!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
    });
    // get Edit Records
    $('#mytable').on('click','.edit_record',function(){
      var kode=$(this).attr('code');
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/get_data_edit')?>",
        dataType : "JSON",
        data : {kode:kode},
        success: function(data){
          $('#kode_supplier_edit').val(data[0].code);
          $('#nama_supplier_edit').val(data[0].nama);
          $('#alamat_supplier_edit').val(data[0].alamat);
          $('#telepon_supplier_edit').val(data[0].telepon);
          $('#catatan_supplier_edit').val(data[0].catatan);
          $('#npwp_supplier_edit').val(data[0].npwp);
          $('#kota_supplier_edit').val(data[0].kota);
          $('#modal_edit_supplier').modal('show');
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Data gagal ditampilkan!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
    });
    // End Edit Records
    // get delete Records
    $('#mytable').on('click','.delete_record',function(){
      var kode=$(this).attr('code');
      var nama=$(this).attr('nama');
      $('#kode_hapus').html(kode);
      $('#kode_hapus_supplier').val(kode);
      $('#nama_hapus').html(nama);
      $('#ModalDelete').modal('show');
    });
    // End delete Records
  });

  </script>
