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
    $this->datatables->add_column('view', '<a href="javascript:void(0);" class="view_record btn btn-info" kode="$1">View</a> <a href="javascript:void(0);" class="edit_record btn btn-warning" nama="$2" code="$1">Edit</a>  <a href="javascript:void(0);" class="delete_record btn btn-danger" code="$1">Hapus</a>','codesup,nama');
    return $this->datatables->generate();
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
        'dateopr' => date('d-m-Y H:i:s')
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
  function update_data(){
    $product_code=$this->input->post('product_code');
    $data=array(
      'product_name'         => $this->input->post('product_name'),
      'product_price'        => $this->input->post('price'),
      'product_category_id'  => $this->input->post('category')
    );
    $this->db->where('product_code',$product_code);
    $result=$this->db->update('product', $data);
    return $result;
  }
  //delete data method
  function delete_data(){
    $product_code=$this->input->post('product_code');
    $this->db->where('product_code',$product_code);
    $result=$this->db->delete('product');
    return $result;
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
}
