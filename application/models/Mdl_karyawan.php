<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_karyawan extends CI_Model {
  public function karyawan_list(){
    $this->db->select('gaji_pokok.id as gaji_pokok_id, gaji_pokok.gaji_pokok as gaji_pokok, jatah_libur.id as jatah_libur_id, jatah_libur.libur as jatah_libur, pegawai_shift.id as shift_id, pegawai_shift.shift_masuk1 as masuk1,pegawai_shift.shift_masuk2 as masuk2,pegawai_shift.shift_pulang1 as pulang1,pegawai_shift.shift_pulang2 as pulang2,  pegawai.nama as nama, pegawai_info.posisi as posisi, pegawai_info.kontak as kontak, pegawai_info.status as status, pegawai.pegawai_id as id');
    $this->db->from('pegawai');
    $this->db->join('pegawai_info', 'pegawai.pegawai_id = pegawai_info.id_pegawai', 'left');
    $this->db->join('pegawai_shift', 'pegawai.pegawai_id = pegawai_shift.id_pegawai', 'left');
    $this->db->join('jatah_libur', 'pegawai.pegawai_id = jatah_libur.id_karyawan', 'left');
    $this->db->join('gaji_pokok', 'pegawai.pegawai_id = gaji_pokok.id_karyawan', 'left');
    return $this->db->get();
  }
  public function active_karyawan(){
    $this->db->select('pegawai.nama as nama, pegawai.pegawai_id as pegawai_id');
    $this->db->from('pegawai');
    $this->db->join('pegawai_info', 'pegawai.pegawai_id = pegawai_info.id_pegawai', 'left');
    $this->db->where('pegawai_info.status', 1);
    $this->db->order_by('pegawai.nama', 'asc');
    $data = $this->db->get();
    return $data;
  }
  public function get_info($id){
    $data = $this->db->get_where('pegawai_info', array('id_pegawai' => $id ));
    return $data;
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
  public function insert_info($obj){
    $data = $this->db->insert('pegawai_info', $obj);
    return $data;
  }
  public function update_info($obj,$id_pegawai){
    $this->db->where('id_pegawai', $id_pegawai);
    $data = $this->db->update('pegawai_info', $obj);
    return $data;
  }
}
/* End of file ${TM_FILENAME:mdl_karyawan.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_karyawan/:application/models/mdl_karyawan.php} */
