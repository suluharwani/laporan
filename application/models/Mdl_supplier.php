<?php
class Mdl_supplier extends CI_Model{
  //get all categories method
  // function get_category(){
  //     $result=$this->db->get('categories');
  //     return $result;
  // }
  //generate dataTable serverside method
  function get_data() {
    $this->datatables->select('codesup,nama');
    $this->datatables->from('supplier');
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="view_record btn btn-info" kode="$1">View</a> <a href="javascript:void(0);" class="edit_record btn btn-warning" code="$1">Edit</a>  <a href="javascript:void(0);" class="delete_record btn btn-danger" nama=$2 code="$1">Hapus</a>','codesup,nama');
    return $this->datatables->generate();
  }
  //edit supplier
  function edit_supplier($data){
    $obj=array(
      'nama'        => strtoupper($data['nama_supplier']),
      'kota'       => strtoupper($data['kota_supplier']),
      'alamat'       => strtoupper($data['alamat_supplier']),
      'telpon' => $data['telepon_supplier'],
      'catatan' => $data['catatan_supplier'],
      'npwp' => $data['npwp_supplier'],
      'opr' => $data['nama_admin'],
      'dateopr' => date('Y-m-d H:i:s')
    );
    $this->db->where('codesup', $data['kode_supplier']);
    return $this->db->update('supplier', $obj);
  }
  //insert data method
  function insert_data($data){
    $this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'is_unique[supplier.codesup]');
    if ($this->form_validation->run() == TRUE){
      $obj=array(
        'codesup'        => strtoupper($data['kode_supplier']),
        'nama'        => strtoupper($data['nama_supplier']),
        'kota'       => strtoupper($data['kota_supplier']),
        'alamat'       => strtoupper($data['alamat_supplier']),
        'telpon' => $data['telepon_supplier'],
        'catatan' => $data['catatan_supplier'],
        'npwp' => $data['npwp_supplier'],
        'opr' => $data['nama_admin'],
        'dateopr' => date('Y-m-d H:i:s')
      );
      return $this->db->insert('supplier', $obj);
    }
    else{
      header('HTTP/1.1 500 Internal Server Booboo');
      header('Content-Type: application/json; charset=UTF-8');
      die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
  }
  //update data method
  //delete data method
  function hapus_supplier($kode){
    $this->db->delete('sales', array('codesup' => $kode));
    return $this->db->delete('supplier', array('codesup' => $kode));
  }
  function check_kode($str){
    $this->db->where('codesup', $str);
    $query = $this->db->get('supplier');
    if ($query->num_rows() >0) {
      return true;
    }else{
      return false;
    }
  }
  function get_data_supplier_dipilih($code){
    $this->db->select('codesup as code, nama,alamat, kota, telpon as telepon, catatan, npwp, opr as operator, dateopr as tanggal');
    $this->db->where('codesup', $code);
    return $this->db->get('supplier');
  }
  function get_data_sales($kode){
    $this->db->select('supplier.nama as nama_supplier, sales.catatan as catatan, sales.id as id, sales.codesup as codesup, sales.nama_sales as nama_sales, sales.hp as hp, sales.status as status, sales.tanggal_daftar as tanggal_daftar, sales.tanggal_edit as tanggal_edit');
    $this->db->from('sales');
    $this->db->join('supplier','sales.codesup = supplier.codesup');
    $this->db->where('supplier.codesup', $kode);
    $this->db->order_by('sales.status', 'desc');
    return $this->db->get();
  }
  function check_nama_sales($nama_sales, $kode){
    $this->db->where(array('nama_sales' => $nama_sales, 'codesup' => $kode));
    $query = $this->db->get('sales');
    if ($query->num_rows() >0) {
      return true;
    }else{
      return false;
    }
  }
  function tambah_sales($obj){
    return $this->db->insert('sales', $obj);
  }
  function hapus_sales($kode){
    return $this->db->delete('sales', array('id' => $kode));
  }
  function nonaktifkan_sales($id){
    $this->db->where('id', $id);
    return $this->db->update('sales', array('status'=> 0, 'tanggal_edit'=> date('Y-m-d H:i:s')));
  }
  function aktifkan_sales($id){
    $this->db->where('id', $id);
    return $this->db->update('sales', array('status'=> 1, 'tanggal_edit'=> date('Y-m-d H:i:s')));
  }
  function update_sales($kode_sales, $obj){
    $this->db->where('id', $kode_sales);
    return $this->db->update('sales', $obj);
  }
  function get_data_nota($kode){
    $this->db->select('supplier.codesup as codesup, supplier.nama as nama, supplier_nota.id as id, supplier_nota.tanggal_nota as tanggal_nota, supplier_nota.nilai_nota as nilai_nota, supplier_nota.tanggal_jatuh_tempo as tanggal_jatuh_tempo, supplier_nota.catatan as catatan, supplier_nota.potongan as potongan, supplier_nota.status as status, supplier_nota.faktur as faktur, supplier_nota.nama_admin as nama_admin');
    $this->db->join('supplier_nota', 'supplier.codesup = supplier_nota.codesup');
    $this->db->limit(100);
    $this->db->where('supplier_nota.codesup', $kode);
    $this->db->order_by('supplier_nota.status', 'asc');
    return $this->db->get('supplier');
  }
}
