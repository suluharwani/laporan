<style type="text/css" media="print">
@media print {
  a[href]:after {
    content: none !important;
  }
}
}
</style>
<link href="<?=base_url('assets/sb/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="<?=base_url('assets/')?>css/calendar.css" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-1 text-gray-800">Kalender</h1>
  <p class="mb-4">Agenda</p>
  <!-- Content Row -->
  <div class="row">
    <div class="p-5">
  <h2 class="mb-4">Full Calendar</h2>
  <div class="card">
    <div class="card-body p-0">
      <div id="calendar"></div>
    </div>
  </div>
</div>

<!-- calendar modal -->
<div id="modal-view-event" class="modal modal-top fade calendar-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span></h4>
					<div class="event-body"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="add-event">
        <div class="modal-body">
        <h4>Add Event Detail</h4>
          <div class="form-group">
            <label>Event name</label>
            <input type="text" class="form-control" name="ename">
          </div>
          <div class="form-group">
            <label>Event Date</label>
            <input type='text' class="datetimepicker form-control" name="edate">
          </div>
          <div class="form-group">
            <label>Event Description</label>
            <textarea class="form-control" name="edesc"></textarea>
          </div>
          <div class="form-group">
            <label>Event Color</label>
            <select class="form-control" name="ecolor">
              <option value="fc-bg-default">fc-bg-default</option>
              <option value="fc-bg-blue">fc-bg-blue</option>
              <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
              <option value="fc-bg-pinkred">fc-bg-pinkred</option>
              <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
            </select>
          </div>
          <div class="form-group">
            <label>Event Icon</label>
            <select class="form-control" name="eicon">
              <option value="circle">circle</option>
              <option value="cog">cog</option>
              <option value="group">group</option>
              <option value="suitcase">suitcase</option>
              <option value="calendar">calendar</option>
            </select>
          </div>
      </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Save</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="related-product">
			<div class="container">
        <h1 class="text-center mb-5">Bootstrap 4 Admin Panel</h1>
				<ul class="row justify-content-center">
					<li class="col-md-6 col-sm-12">
						<a href="https://github.com/dropways/deskapp">
							<div class="related-box">
								<img src="https://dropways.github.io/feathericons/assets/themes/twitter/images/deskapp.png" alt="deskapp">
							</div>
							<h3>DeskApp Bootstrap 4 admin template</h3>
							<p>DeskApp Admin is a free to use Bootstrap 4 admin template. This template uses the default Bootstrap 4 styles along with a variety of powerful jQuery plugins and tools to create a powerful framework for creating admin panels or back-end dashboards.</p>
						</a>
            <div class="text-center">
              <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-primary btn-lg download-btn"><i class="fa fa-github"></i> Download Now</a>
            </div>
					</li>
				</ul>
			</div>
		</div>
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
        <input type="text" id="kode_supplier_sales_hapus" hidden>
        <input type="text" id="nama_sales_hapus1" hidden>
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
        <input type="text" id="sales_id_supplier_aktifkan" hidden>
        <input type="text" id="nama_sales_aktifkan1" hidden>
        <input type="text" id="kode_supplier_aktifkan_sales" hidden>
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
        Hapus supplier <span id="nama_sales_nonaktifkan"></span>?
        <input type="text" id="id_sales_nonaktifkan" hidden>
        <input type="text" id="kodesup_sales_nonaktifkan" hidden>
        <input type="text" id="nama_sales_nonaktifkan1" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-warning confirm_nonaktifkan_sales">Nonaktifkan</button>
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
              <input type="text" id="sales_id_supplier_data" hidden class="form-control">
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
        <button type="button" class="btn btn-primary" id="sales_perbarui_data">Simpan</button>
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
  $(document).ready(function() {
     $('.datatable').dataTable( {
    } );
} );
    function show_nota_supplier(kode){
    $.ajax({
      type  : 'post',
      url   : "<?php echo base_url('index.php/admin/get_data_nota_supplier')?>",
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
        var btn = '';
        var tagihan = '';
        var note = "rincian tagihan klik pada nomor faktur faktur";
        header_table ='<tr>'+
                       '<th>No</th>'+
                       '<th>Faktur</th>'+
                       '<th style="text-align:center;">Status </th>'+
                      '</tr>';
        btn = '<a href="javascript:void(0);" class="btn btn-info float-center view_nota_lunas" kode_sup="'+kode+'">Nota Lunas</a>   <a href="javascript:void(0);" class="btn btn-success float-right tambah_nota" kode_sup="'+kode+'">Tambah Nota</a>';
        for(i=0; i<data.length; i++){
          if (data[i].status == false) {
            status = '<font color="red">Belum</font> <a href="javascript:void(0);" class="btn btn-primary btn-sm view_data_sales">Bayar</a> <a href="javascript:void(0);" class="delete_nota btn-sm btn-danger fa fa-trash" title="hapus"></a> ';
          }else if(data[i].status == true) {
            status = '<font color="green">Lunas</font> <a href="javascript:void(0);" class="btn btn-warning btn-sm view_data_sales">Batalkan</a> <a href="javascript:void(0);" class="delete_nota btn-sm btn-danger fa fa-trash" title="hapus"></a> ';
          }
          tagihan = parseFloat(data[i].nilai_nota) - parseFloat(data[i].potongan);
          edit = status+'|'+view_data_sales+' '+ubah_status_sales;
          html += '<tr>'+
                      '<td>'+ no++ +'</td>'+
                      '<td> <a href="javascript:void(0);" class="btn btn-info btn-sm data_nota" kode_sup="'+data[i].codesup+'" ">'+tagihan+'</a</td>'+
                      '<td style="text-align:center;">'+status+'</td>'+
                  '</tr>';
        }
        $('#header_table_supplier').html(header_table);
        $('#data_sup_view').html(html);
        $('.btn_sup_add_data').html(btn);
        $('#notesupplier').html(note);
      }
    });
  };

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
        var nama_supplier = '';
        var btn = '';
        header_table ='<th>No</th>'+
                      '<th>Nama</th>'+
                      // '<th>HP</th>'+
                      '<th style="text-align:center;">Status</th>';
        btn = '<a href="javascript:void(0);" class="btn btn-success float-right tambah_sales" kode_sup="'+kode+'">Tambah Sales</a>';
        for(i=0; i<data.length; i++){
          if (data[i].status == false) {
            status = '<font color="red">OFF</font>';
            view_data_sales = '<a href="javascript:void(0);" class="btn btn-primary btn-sm view_data_sales" catatan="'+data[i].catatan+'" nomor_telepon="'+data[i].hp+'"  kode_sup="'+data[i].codesup+'" nama="'+data[i].nama_sales+'" kode_sales="'+data[i].id+'">Data</a>';
            ubah_status_sales = '<a href="javascript:void(0);" class="btn btn-success btn-sm aktifkan_sales" nama="'+data[i].nama_sales+'"  kode_sup="'+data[i].codesup+'" kode_sales="'+data[i].id+'">Aktifkan</a> <a href="javascript:void(0);" class="btn btn-danger btn-sm hapus_sales" nama="'+data[i].nama_sales+'" kode_sup="'+data[i].codesup+'" kode_sales="'+data[i].id+'" >Hapus</a>';

          }else if(data[i].status == true) {
            status = '<font color="green">AKTIF</font>';
            view_data_sales = '<a href="javascript:void(0);" class="btn btn-primary btn-sm view_data_sales" catatan="'+data[i].catatan+'" nomor_telepon="'+data[i].hp+'"  kode_sup="'+data[i].codesup+'" nama="'+data[i].nama_sales+'" kode_sales="'+data[i].id+'">Data</a>';
            ubah_status_sales = '<a href="javascript:void(0);" class="btn btn-warning btn-sm nonaktifkan_sales" nama="'+data[i].nama_sales+'"  kode_sup="'+data[i].codesup+'" kode_sales="'+data[i].id+'" >Nonaktifkan</a>';
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
        $('.btn_sup_add_data').html(btn);
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
      var kode_sup = $(this).attr('kode_sup');
      $('#nama_sales_hapus').html(nama);
      $('#nama_sales_hapus1').val(nama);
      $('#sales_id_supplier_hapus').val(kode);
      $('#kode_supplier_sales_hapus').val(kode_sup);
      $('#ModalDeleteSales').modal('show');
    });
    $('.confirm_hapus_sales').on('click',function(){
      var kode_sales = $('#sales_id_supplier_hapus').val();
      var kodesup = $('#kode_supplier_sales_hapus').val();
      var nama = $('#nama_sales_hapus1').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('index.php/admin/hapus_sales')?>",
        // dataType : "JSON",
        data : {kode_sales:kode_sales},
        success: function(data){
          show_sales_supplier(kodesup);
          $('#ModalDeleteSales').modal('hide');
          swal ( "Sukses" ,  "Sales "+nama+" berhasil dihapus!" ,  "success", {
            buttons: false,
            timer: 3000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Sales gagal dihapus!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
    });
    $('#data_sup_view').on('click','.aktifkan_sales',function(){
      var kode = $(this).attr('kode_sales');
      var nama = $(this).attr('nama');
      var kode_supplier = $(this).attr('kode_sup');
      $('#nama_sales_aktifkan').html(nama);
      $('#nama_sales_aktifkan1').val(nama);
      $('#sales_id_supplier_aktifkan').val(kode);
      $('#kode_supplier_aktifkan_sales').val(kode_supplier);
      $('#ModalAktifkanSales').modal('show');
    });
    $('.confirm_aktifkan_sales').on('click',function(){
      var kode_sales = $('#sales_id_supplier_aktifkan').val();
      var kodesup = $('#kode_supplier_aktifkan_sales').val();
      var nama = $('#nama_sales_aktifkan1').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('index.php/admin/aktifkan_sales')?>",
        // dataType : "JSON",
        data : {kode_sales:kode_sales},
        success: function(data){
          show_sales_supplier(kodesup);
          $('#ModalAktifkanSales').modal('hide');
          swal ( "Sukses" ,  "Sales "+nama+" berhasil diaktifkan!" ,  "success", {
            buttons: false,
            timer: 3000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Sales "+nama+" gagal diaktifkan!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
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

    $('#sales_perbarui_data').on('click',function(){
      var kode_sales = $('#sales_id_supplier_data').val();
      var nama = $('#nama_sales_data').val();
      var catatan = $('#catatan_sales_data').val();
      var nomor_telepon = $('#nomor_telepon_sales_data').val();
      var kodesup = $('#kode_supplier_sales_view').val();

      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('index.php/admin/edit_sales')?>",
        // dataType : "JSON",
        data : {kode_sales:kode_sales, nama:nama, catatan:catatan, nomor_telepon:nomor_telepon},
        success: function(data){
          show_sales_supplier(kodesup);
          $('#ModalDataSales').modal('hide');
          swal ( "Sukses" ,  "Sales berhasil disimpan!" ,  "success", {
            buttons: false,
            timer: 3000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Sales gagal disimpan!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
    });
    $('#data_sup_view').on('click','.nonaktifkan_sales',function(){
      var kode=$(this).attr('kode_sales');
      var nama = $(this).attr('nama');
      var kode_sup = $(this).attr('kode_sup');
      $('#nama_sales_nonaktifkan').html(nama);
      $('#nama_sales_nonaktifkan1').val(nama);
      $('#id_sales_nonaktifkan').val(kode);
      $('#kodesup_sales_nonaktifkan').val(kode_sup);
      $('#ModalNonaktifkanSales').modal('show');
    });
    $('.confirm_nonaktifkan_sales').on('click',function(){
      var kode_sales = $('#id_sales_nonaktifkan').val();
      var kodesup = $('#kodesup_sales_nonaktifkan').val();
      var nama = $('#nama_sales_nonaktifkan1').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('index.php/admin/nonaktifkan_sales')?>",
        // dataType : "JSON",
        data : {kode_sales:kode_sales},
        success: function(data){
          show_sales_supplier(kodesup);
          $('#ModalNonaktifkanSales').modal('hide');
          swal ( "Sukses" ,  "Sales "+nama+" berhasil dinonaktifkan!" ,  "success", {
            buttons: false,
            timer: 3000,
          } );
        },
        error: (function(data) {
          swal ( "Gagal" ,  "Sales "+nama+" gagal dinonaktifkan!" ,  "error",  {
            buttons: false,
            timer: 1000,
          } );
        })
      });
      return false;
    });
  $('.btn_sup_add_data').on('click','.tambah_sales',function(){
      var kode=$(this).attr('kode_sup');
      $('#sales_kode_supplier_tambah').val(kode);
      $('#ModalTambahSales').modal('show');
    });
    $(document).ready(function(){
    $('#sales_nama_tambah').keyup(function(){
      var nama_sales = $('#sales_nama_tambah').val();
      var kode = $('#sales_kode_supplier_tambah').val();
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
        var btn = '';
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
        $('.btn_sup_add_data').html(btn);
      }
    });
  };

  $('#mytable').on('click','.view_record',function(){
    var kode=$(this).attr('kode');
    var nama_supplier=$(this).attr('nama_supplier');
    $('#nama_supplier_table').html(nama_supplier);
    show_data_dipilih(kode);
  });
  $('#mytable').on('click','.sales',function(){
    var kode=$(this).attr('kode');
    var nama_supplier=$(this).attr('nama_supplier');
    $('#nama_supplier_table').html(nama_supplier);
    show_sales_supplier(kode);
  });
  $('#mytable').on('click','.hutang_bayar',function(){
    var kode=$(this).attr('kode');
    var nama_supplier=$(this).attr('nama_supplier');
    $('#nama_supplier_table').html(nama_supplier);
    show_nota_supplier(kode);
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
        ajax: {"url": "<?php echo base_url().'index.php/admin/get_supplier_json'?>",
              "type": "POST"},
        columns: [
          {"data": "codesup"},
          {"data": "nama"},
          //render number format for price
          // {"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
          {"data": "codesup", mRender: function (data, type, row) {
                       return '<a href="javascript:void(0);" class="hutang_bayar btn btn-dark fa fa-usd" title="hutang dan pembayaran" nama_supplier="'+row[`nama`]+'" kode="'+row[`codesup`]+'"></a> <a href="javascript:void(0);" class="sales btn btn-success fa fa-users" title="sales" nama_supplier="'+row[`nama`]+'" kode="'+row[`codesup`]+'"></a> <a href="javascript:void(0);" class="view_record btn btn-info fa fa-eye" title="view" nama_supplier="'+row[`nama`]+'" kode="'+row[`codesup`]+'"></a> <a href="javascript:void(0);" class="edit_record btn btn-warning fa fa-pencil" title="edit" code="'+row[`codesup`]+'"></a>  <a href="javascript:void(0);" class="delete_record btn btn-danger fa fa-trash" title="hapus" nama='+row["nama"]+' code="'+row[`codesup`]+'"></a>';
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

//calender
jQuery(document).ready(function(){
  jQuery('.datetimepicker').datepicker({
      timepicker: true,
      language: 'en',
      range: true,
      multipleDates: true,
		  multipleDatesSeparator: " - "
    });
  jQuery("#add-event").submit(function(){
      alert("Submitted");
      var values = {};
      $.each($('#add-event').serializeArray(), function(i, field) {
          values[field.name] = field.value;
      });
      console.log(
        values
      );
  });
});

(function () {
    'use strict';
    // ------------------------------------------------------- //
    // Calendar
    // ------------------------------------------------------ //
	jQuery(function() {
		// page is ready
		jQuery('#calendar').fullCalendar({
			themeSystem: 'bootstrap4',
			// emphasizes business hours
			businessHours: false,
			defaultView: 'month',
			// event dragging & resizing
			editable: true,
			// header
			header: {
				left: 'title',
				center: 'month,agendaWeek,agendaDay',
				right: 'today prev,next'
			},
			events: [
				{
					title: 'Barber',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-05-05',
					end: '2020-05-05',
					className: 'fc-bg-default',
					icon : "circle"
				},
				{
					title: 'Flight Paris',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-08T14:00:00',
					end: '2020-08-08T20:00:00',
					className: 'fc-bg-deepskyblue',
					icon : "cog",
					allDay: false
				},
				{
					title: 'Team Meeting',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-07-10T13:00:00',
					end: '2020-07-10T16:00:00',
					className: 'fc-bg-pinkred',
					icon : "group",
					allDay: false
				},
				{
					title: 'Meeting',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-12',
					className: 'fc-bg-lightgreen',
					icon : "suitcase"
				},
				{
					title: 'Conference',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-13',
					end: '2020-08-15',
					className: 'fc-bg-blue',
					icon : "calendar"
				},
				{
					title: 'Baby Shower',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-13',
					end: '2020-08-14',
					className: 'fc-bg-default',
					icon : "child"
				},
				{
					title: 'Birthday',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-09-13',
					end: '2020-09-14',
					className: 'fc-bg-default',
					icon : "birthday-cake"
				},
				{
					title: 'Restaurant',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-10-15T09:30:00',
					end: '2020-10-15T11:45:00',
					className: 'fc-bg-default',
					icon : "glass",
					allDay: false
				},
				{
					title: 'Dinner',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-11-15T20:00:00',
					end: '2020-11-15T22:30:00',
					className: 'fc-bg-default',
					icon : "cutlery",
					allDay: false
				},
				{
					title: 'Shooting',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-25',
					end: '2020-08-25',
					className: 'fc-bg-blue',
					icon : "camera"
				},
				{
					title: 'Go Space :)',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-12-27',
					end: '2020-12-27',
					className: 'fc-bg-default',
					icon : "rocket"
				},
				{
					title: 'Dentist',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-12-29T11:30:00',
					end: '2020-12-29T012:30:00',
					className: 'fc-bg-blue',
					icon : "medkit",
					allDay: false
				}
			],
			eventRender: function(event, element) {
				if(event.icon){
					element.find(".fc-title").prepend("<i class='fa fa-"+event.icon+"'></i>");
				}
			  },
			dayClick: function() {
				jQuery('#modal-view-event-add').modal();
			},
			eventClick: function(event, jsEvent, view) {
			        jQuery('.event-icon').html("<i class='fa fa-"+event.icon+"'></i>");
					jQuery('.event-title').html(event.title);
					jQuery('.event-body').html(event.description);
					jQuery('.eventUrl').attr('href',event.url);
					jQuery('#modal-view-event').modal();
			},
		})
	});

})(jQuery);
  </script>
