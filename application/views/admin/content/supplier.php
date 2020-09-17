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
  <h1 class="h3 mb-1 text-gray-800">Data Supplier</h1>
  <p class="mb-4">Data Supplier</p>
  <!-- Content Row -->
  <div class="row">

    <!-- Grow In Utility -->
    <div class="col-lg-7">

      <div class="card position-relative">
        <div class="card-header py-3">
          <div class="d-inline m-0 font-weight-bold text-primary">Daftar Supplier</div>
          <div class="d-inline">
            <button class="btn btn-success float-right" data-toggle="modal" data-target="#modal_tambah_supplier">Tambah Supplier</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive" >
            <table id="mytable" class="display" cellspacing="0" width="100%">
              <thead>
                <tr  class="text-center">
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr class="text-center">
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="my-2"></div>
          <p class="mb-0 small">Note: Kode supplier tidak bisa sama </p>
          <p class="mb-0 small">Tombol View untuk melihat data supplier, Edit untuk mengubah data dan Hapus untuk menghapus data. </p>
          <p class="mb-0 small">Pencarian dapat mencari kode maupun nama supplier </p>
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
                <p>Rincian Supplier dan Sales</p>
                <table class="table">
                  <thead>
                    <tr id="header_table_supplier">
                      
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
<!-- modal tambah sales -->
<div class="modal fade" id="ModalTambahSales" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Sales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="kode_supplier" class="col-sm-2 col-form-label">Kode Supplier</label>
            <div class="col-sm-10">
              <input type="text" id="sales_kode_supplier_tambah" disabled class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_supplier" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" id="sales_nama_tambah" class="form-control">
              <span id="nama_sales_check"></span>
            </div>
          </div>
          <div class="form-group row">
            <label for="telepon_supplier" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
              <input type="text" id="sales_telepon_tambah" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="catatan_supplier" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="sales_catatan_tambah" rows="4"></textarea>
            </div>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="sales_simpan_tambah">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal tambah sales -->
<!-- modal delete supplier -->
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
<!-- modal hapus sales -->
<div class="modal fade" id="ModalDeleteSales" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalDelete">Hapus Sales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hapus sales <span id="nama_sales_hapus"></span>?
        <input type="text" id="sales_id_supplier_hapus" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-danger confirm_hapus_sales">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- modal aktifkan sales -->
<div class="modal fade" id="ModalAktifkanSales" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalDelete">Aktifkan Sales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Aktifkan sales <span id="nama_sales_aktifkan"></span>?
        <input type="text" id="sales_id_supplier_aktif" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-success confirm_aktifkan_sales">Aktifkan Sales</button>
      </div>
    </div>
  </div>
</div>
<!-- modal nonaktifkan sales -->
<div class="modal fade" id="ModalNonaktifkanSales" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalDelete">Aktifkan Sales</h5>
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
<!-- modal data sales -->
<div class="modal fade" id="ModalDataSales" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Data Sales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="kode_supplier_sales_view" class="col-sm-2 col-form-label">Kode Supplier</label>
            <div class="col-sm-10">
              <input type="text" id="kode_supplier_sales_view" disabled class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_sales_data" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" id="nama_sales_data" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nomor_telepon_sales_data" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
              <input type="text" id="nomor_telepon_sales_data" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="catatan_sales_data" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="catatan_sales_data" rows="4"></textarea>
            </div>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="sales_simpan_tambah">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal data sales -->
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
  function show_sales_supplier(kode){
    $.ajax({
      type  : 'post',
      url   : "<?php echo base_url('index.php/admin/get_data_sales')?>",
      async : false,
      dataType : 'json',
      data : {kode:kode},
      success : function(data){
        var i;
        var no = 1;
        var html = '';
        var status = '';
        var edit = '';
        var view_data_sales ='';
        var ubah_status_sales = '';
        var header_table = '';
        header_table ='<th>No</th>'+
                      '<th>Nama</th>'+
                      // '<th>HP</th>'+
                      '<th style="text-align:center;">Status <a href="javascript:void(0);" class="btn btn-success btn-sm tambah_sales" kode_sup="'+kode+'" >Tambah</a></th>';
        for(i=0; i<data.length; i++){
          if (data[i].status == false) {
            status = '<font color="red">OFF</font>';
            view_data_sales = '<a href="javascript:void(0);" class="btn btn-primary btn-sm view_data_sales" catatan="'+data[i].catatan+'" nomor_telepon="'+data[i].hp+'"  kode_sup="'+data[i].codesup+'" nama="'+data[i].nama_sales+'" kode_sales="'+data[i].id+'">Data</a>';
            ubah_status_sales = '<a href="javascript:void(0);" class="btn btn-success btn-sm aktifkan_sales" nama="'+data[i].nama_sales+'" kode_sales="'+data[i].id+'">Aktifkan</a> <a href="javascript:void(0);" class="btn btn-danger btn-sm hapus_sales" nama="'+data[i].nama_sales+'" kode_sales="'+data[i].id+'" >Hapus</a>';
            
          }else if(data[i].status == true) {
            status = '<font color="green">AKTIF</font>';
            view_data_sales = '<a href="javascript:void(0);" class="btn btn-primary btn-sm view_data_sales" catatan="'+data[i].catatan+'" nomor_telepon="'+data[i].hp+'"  kode_sup="'+data[i].codesup+'" nama="'+data[i].nama_sales+'" kode_sales="'+data[i].id+'">Data</a>';
            ubah_status_sales = '<a href="javascript:void(0);" class="btn btn-warning btn-sm nonaktifkan_sales" nama="'+data[i].nama_sales+'" kode_sales="'+data[i].id+'" >Nonaktifkan</a>';
          }
          edit = status+'|'+view_data_sales+' '+ubah_status_sales;
          html += '<tr>'+
          '<td>'+ no++ +'</td>'+
          '<td>'+data[i].nama_sales+'</td>'+
          // '<td>'+data[i].hp+'</td>'+
          '<td style="text-align:center;">'+edit+'</td>'+
          '</tr>';
        }
        $('#header_table_supplier').html(header_table);
        $('#data_sup_view').html(html);
      }
    });
  };
  $('#sales_simpan_tambah').on('click',function(){
      var kode_supplier = $('#sales_kode_supplier_tambah').val();
      var nama_sales = $('#sales_nama_tambah').val();
      var telepon = $('#sales_telepon_tambah').val();
      var catatan = $('#sales_catatan_tambah').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('index.php/admin/tambah_sales')?>",
        // dataType : "JSON",
        data : {kode_supplier:kode_supplier, nama_sales:nama_sales, telepon:telepon, catatan:catatan},
        success: function(data){
          $('#ModalTambahSales').modal('hide');
          show_sales_supplier(kode_supplier)
          swal ( "Sukses" ,  " "+nama_sales+" berhasil ditambahkan ke supplier"+kode_supplier+"!" ,  "success", {
            buttons: false,
            timer: 3000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Sales gagal ditambahkan!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
    });
    $('#data_sup_view').on('click','.hapus_sales',function(){
      var kode=$(this).attr('kode_sales');
      var nama = $(this).attr('nama');
      $('#nama_sales_hapus').html(nama);
      $('#sales_id_supplier_hapus').val(kode);
      $('#ModalDeleteSales').modal('show');
    });
    $('#data_sup_view').on('click','.aktifkan_sales',function(){
      var kode = $(this).attr('kode_sales');
      var nama = $(this).attr('nama');
      $('#nama_sales_aktifkan').html(nama);
      $('#sales_id_supplier_aktif').val(kode);
      $('#ModalAktifkanSales').modal('show');
    });
    $('#data_sup_view').on('click','.view_data_sales',function(){
      var kode=$(this).attr('kode_sales');
      var nama = $(this).attr('nama');
      var kode_supplier = $(this).attr('kode_sup');
      var catatan = $(this).attr('catatan');
      var nomor_telepon = $(this).attr('nomor_telepon');
      $('#nama_sales_data').val(nama);
      $('#catatan_sales_data').val(catatan);
      $('#nomor_telepon_sales_data').val(nomor_telepon);
      $('#kode_supplier_sales_view').val(kode_supplier);
      $('#sales_id_supplier_data').val(kode);
      $('#ModalDataSales').modal('show');
    });
    $('#data_sup_view').on('click','.nonaktifkan_sales',function(){
      var kode=$(this).attr('kode_sales');
      var nama = $(this).attr('nama');
      $('#nama_sales_nonaktifkan').html(nama);
      $('#sales_id_supplier_nonatktif').val(kode);
      $('#ModalNonaktifkanSales').modal('show');
    });
  $('#header_table_supplier').on('click','.tambah_sales',function(){
      var kode=$(this).attr('kode_sup');
      $('#sales_kode_supplier_tambah').val(kode);
      $('#ModalTambahSales').modal('show');
    });
    $(document).ready(function(){
    $('#sales_nama_tambah').keyup(function(){
      var nama_sales = $('#sales_nama_tambah').val();
      var kode = $('#sales_kode_supplier').val();
      if(nama_sales != ''){
        $.ajax({
          url: "<?php echo base_url(); ?>index.php/admin/check_nama_sales",
          method: "POST",
          data: {nama_sales:nama_sales, kode:kode},
          success: function(data){
            $('#nama_sales_check').html(data);
          }
        });
      }
    });
  });
  function show_data_dipilih(kode){
    $.ajax({
      type  : 'post',
      url   : "<?php echo base_url('index.php/admin/data_supplier_dipilih')?>",
      async : false,
      dataType : 'json',
      data : {kode:kode},
      success : function(data){
        var html = '';
        var header_table = '';
        header_table = '<th>Variabel Supplier</th>'+
                      '<th>Value</th>';
        html =
        '<tr>'+
        '<td>Kode</td>'+
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
        '<td>Dibuat</td>'+
        '<td>'+ data[0].tanggal +'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Adm</td>'+
        '<td>'+ data[0].operator +'</td>'+
        '</tr>';
        $('#header_table_supplier').html(header_table);
        $('#data_sup_view').html(html);
      }
    });
  };

  $('#mytable').on('click','.view_record',function(){
    var kode=$(this).attr('kode');
    show_data_dipilih(kode);
  });
  $('#mytable').on('click','.sales',function(){
    var kode=$(this).attr('kode');
    show_sales_supplier(kode);
  });

  $(document).ready(function(){
    $('#kode_supplier').keyup(function(){
      var kode_supplier = $('#kode_supplier').val();
      if(kode_supplier != ''){
        $.ajax({
          url: "<?php echo base_url(); ?>index.php/admin/check_kode_supplier",
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
        ajax: {"url": "<?php echo base_url().'index.php/admin/get_supplier_json'?>", "type": "POST"},
        columns: [
          {"data": "codesup"},
          {"data": "nama"},
          //render number format for price
          // {"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
          {"data": "codesup", mRender: function (data, type, row) {
                       return '<a href="javascript:void(0);" class="sales btn btn-success" kode="'+row[`codesup`]+'">Sales</a> <a href="javascript:void(0);" class="view_record btn btn-info" kode="'+row[`codesup`]+'">View</a> <a href="javascript:void(0);" class="edit_record btn btn-warning" code="'+row[`codesup`]+'">Edit</a>  <a href="javascript:void(0);" class="delete_record btn btn-danger" nama='+row["nama"]+' code="'+row[`codesup`]+'">Hapus</a>';
          }
        }
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
        url  : "<?php echo site_url('index.php/admin/hapus_supplier')?>",
        // dataType : "JSON",
        data : {kode_supplier:kode_supplier},
        success: function(data){
          $('#ModalDelete').modal('hide');
          show_supplier();
          show_sales_supplier(kode_supplier);
          $('#header_table_supplier').html('');
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
        url  : "<?php echo site_url('index.php/admin/edit_supplier')?>",
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
        url  : "<?php echo site_url('index.php/admin/tambah_supplier')?>",
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
        url  : "<?php echo site_url('index.php/admin/get_data_edit')?>",
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
