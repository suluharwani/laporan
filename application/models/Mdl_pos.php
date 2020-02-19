<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_pos extends CI_Model {
  function get_all_produk() { //ambil data barang dari table barang yang akan di generate ke datatable
       $this->datatables->select('*');
       $this->datatables->from('barang');
       $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-kode="$1" data-nama="$2" data-harga="$3" data-kategori="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-kode="$1">Hapus</a>','*');
       return $this->datatables->generate();
 }
}
/* End of file ${TM_FILENAME:mdl_pos.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_pos/:application/models/mdl_pos.php} */
