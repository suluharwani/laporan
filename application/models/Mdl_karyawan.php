<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_karyawan extends CI_Model {
  public function karyawan_list(){
    $this->db->select('pegawai_shift.id as shift_id, pegawai_shift.shift_masuk1 as masuk1,pegawai_shift.shift_masuk2 as masuk2,pegawai_shift.shift_pulang1 as pulang1,pegawai_shift.shift_pulang2 as pulang2,  pegawai.nama as nama, pegawai_info.posisi as posisi, pegawai_info.kontak as kontak, pegawai_info.status as status, pegawai.pegawai_id as id');
    $this->db->from('pegawai');
    $this->db->join('pegawai_info', 'pegawai.pegawai_id = pegawai_info.id_pegawai', 'left');
    $this->db->join('pegawai_shift', 'pegawai.pegawai_id = pegawai_shift.id_pegawai', 'left');
    return $this->db->get();
  }
  public function get_shift(){
      $data = $this->db->select('pegawai_shift');
      return $data;
  }
  public function tunjangan_list($id){
    $this->db->where('id_pegawai', $id);
    $data = $this->db->get('tunjangan');
    return $data;
  }
}
/* End of file ${TM_FILENAME:mdl_karyawan.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_karyawan/:application/models/mdl_karyawan.php} */
