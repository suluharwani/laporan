<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function index()
  {
    $this->_make_sure_is_admin();
    $data['title'] = "Dashboard";
    $this->load->view('admin/page/dashboard', $data);
  }
  public function karyawan(){
    $this->_make_sure_is_admin();
    $data['title'] = "Karyawan";
    $this->load->view('admin/page/karyawan', $data);
  }
  function update_presensi_karyawan(){
    $this->_make_sure_is_admin();
    $id =   $this->input->post('id');
    $pulang_kerja =   $this->input->post('pulang_kerja');
    $masuk_kerja =   $this->input->post('masuk_kerja');
    $tanggal_presensi =   $this->input->post('tanggal_presensi');
    $object = array('masuk' => date('Y-m-d H:i:s', strtotime("$tanggal_presensi $masuk_kerja")),
                    'pulang' => date('Y-m-d H:i:s', strtotime("$tanggal_presensi $pulang_kerja")),
                    );
    $this->db->where('id_presensi', $id);
    $data = $this->db->update('absensi', $object);
    echo json_encode($data);
  }
  function get_info_karyawan(){
    $this->_make_sure_is_admin();
    $id =   $this->input->post('id');
    $this->load->model('Mdl_karyawan');
    $data = $this->Mdl_karyawan->get_info($id);
    echo json_encode($data->result());
  }
  function simpan_data_karyawan_info(){
    $this->_make_sure_is_admin();
    $this->load->model('Mdl_karyawan');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('id_pegawai', 'Id Pegawai', 'required');
    $this->form_validation->set_rules('masuk_kerja', 'masuk kerja', 'required');
    if ($this->form_validation->run() == FALSE){
      header('HTTP/1.1 500 Internal Server Booboo');
      header('Content-Type: application/json; charset=UTF-8');
      die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }else{
      $status = $this->input->post('status');
      $id_pegawai = $this->input->post('id_pegawai');
      $posisi = $this->input->post('posisi');
      $kontak = $this->input->post('kontak');
      $masuk_kerja = $this->input->post('masuk_kerja');
      $berhenti_kerja = $this->input->post('berhenti_kerja');
      if ($status == 1) {
        $berhenti = null;
      }elseif ($status == 2) {
        $berhenti = $berhenti_kerja;
      }elseif ($status == 3) {
        $berhenti = $berhenti_kerja;
      }else{
        $berhenti = null;
      }
      $check_id =  $this->Mdl_karyawan->get_info($id_pegawai)->num_rows();
      if ($check_id  < 1) {
        $obj = array(
          'id_pegawai' => $id_pegawai,
          'posisi'=> $posisi,
          'kontak'=> $kontak,
          'status'=> $status,
          'masuk'=> $masuk_kerja,
          'berhenti'=> $berhenti,
        );
        $data =  $this->Mdl_karyawan->insert_info($obj);
      }else{
        $obj = array(
          'posisi'=> $posisi,
          'kontak'=> $kontak,
          'status'=> $status,
          'masuk'=> $masuk_kerja,
          'berhenti'=> $berhenti,
        );
        $data =  $this->Mdl_karyawan->update_info($obj,$id_pegawai);
      }
      echo json_encode($data);
    }
  }
  function simpan_data_karyawan(){
    $this->_make_sure_is_admin();
    $gaji_pokok =   $this->input->post('gaji_pokok');
    $jatah_libur =  $this->input->post('jatah_libur');
    $id =   $this->input->post('id');
    // $nama =   $this->input->post('nama');
    $jumlah =   $this->input->post('jumlah');
    $shiftpulang1 =   $this->input->post('shiftpulang1');
    $shiftpulang2 =   $this->input->post('shiftpulang2');
    $shiftmasuk1 =  $this->input->post('shiftmasuk1');
    $shiftmasuk2 =  $this->input->post('shiftmasuk2');


    $check_data_gaji = $this->db->get_where('gaji_pokok', array('id_karyawan'=>$id))->num_rows();
    $check_data_libur = $this->db->get_where('jatah_libur', array('id_karyawan'=>$id))->num_rows();
    $check_data_shift = $this->db->get_where('pegawai_shift', array('id_pegawai'=>$id))->num_rows();

    if ($check_data_gaji != 0) {
      $object_data_gaji = array('gaji_pokok' => $gaji_pokok );
      $this->db->where('id_karyawan', $id);
      $this->db->update('gaji_pokok', $object_data_gaji);
      $update_gaji = $this->db->affected_rows();
    }else {
      $object_data_gaji = array('gaji_pokok' => $gaji_pokok, 'id_karyawan'=> $id );
      $this->db->insert('gaji_pokok', $object_data_gaji);
      $update_gaji = $this->db->affected_rows();
    }
    if ($check_data_libur != 0) {
      $object_data_libur = array('libur' => $jatah_libur );
      $this->db->where('id_karyawan', $id);
      $this->db->update('jatah_libur', $object_data_libur);
      $update_libur = $this->db->affected_rows();
    }else {
      $object_data_libur = array('libur' => $jatah_libur,'id_karyawan'=> $id );
      $this->db->insert('jatah_libur', $object_data_libur);
      $update_libur = $this->db->affected_rows();
    }
    if ($check_data_shift !=0) {
      $object_data_shift = array('shift_pulang1' => $shiftpulang1, 'shift_pulang2'=>$shiftpulang2,'shift_masuk1'=>$shiftmasuk1,'shift_masuk2'=>$shiftmasuk2 );
      $this->db->where('id_pegawai', $id);
      $this->db->update('pegawai_shift', $object_data_shift);
      $update_shift = $this->db->affected_rows();
    }else {
      $object_data_shift = array('id_pegawai'=> $id, 'shift_pulang1' => $shiftpulang1, 'shift_pulang2'=>$shiftpulang2,'shift_masuk1'=>$shiftmasuk1,'shift_masuk2'=>$shiftmasuk2 );
      $this->db->insert('pegawai_shift', $object_data_shift);
      $update_shift = $this->db->affected_rows();
    }
    if ($update_gaji >=1 || $update_libur >=1 || $update_shift>=1) {
      header('HTTP/1.1 200 OK');
    }else{
      header('HTTP/1.1 500 Internal Server Error');
      header('Content-Type: application/json; charset=UTF-8');
      die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
  }
  function hapus_tunjangan(){
    $id = $this->input->post('id');
    $this->db->where('id', $id);
    $data = $this->db->delete('tunjangan');
    echo json_encode($data);
  }
  function tambah_tunjangan(){
    $this->_make_sure_is_admin();
    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
    if ($this->form_validation->run() == FALSE)
    {
      header('HTTP/1.1 500 Internal Server Booboo');
      header('Content-Type: application/json; charset=UTF-8');
      die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
    else
    {
      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $jumlah = $this->input->post('jumlah');
      $object = array('id_pegawai'=>$id,
      'nama_tunjangan' => $nama,
      'nominal'=> $jumlah
    );
    $data = $this->db->insert('tunjangan', $object);
    echo json_encode($data);
  }
}
function karyawan_list(){
  $this->_make_sure_is_admin();
  $this->load->model('Mdl_karyawan');
  $data = $this->Mdl_karyawan->karyawan_list();
  echo json_encode($data->result());
}
function tunjangan_list(){
  $this->_make_sure_is_admin();
  $id = $this->input->post('id');
  $this->load->model('Mdl_karyawan');
  $data = $this->Mdl_karyawan->tunjangan_list($id);
  echo json_encode($data->result());
}
function get_karyawan_shift(){
  $this->_make_sure_is_admin();
  $data = $this->db->get('pegawai_shift');
  echo json_encode($data->result());
}
public function gaji(){
  $this->_make_sure_is_admin();
  $data['title'] = "Gaji Pegawai";
  $this->db->order_by('nama', 'asc');
  $data['pegawai'] = $this->db->get('pegawai')->result();
  $this->load->view('admin/page/gaji', $data);
}
function get_tanggal_absen(){
  $this->_make_sure_is_admin();
  $tgl_awal = $this->input->post('tanggal_awal');
  $tgl_akhir = $this->input->post('tanggal_akhir');
  $id_karyawan = $this->input->post('id_karyawan');
  $this->db->select('*, datediff(masuk,pulang) as selisih_hari, datediff(masuk,tanggal) as selisih_masuk, datediff(pulang,tanggal) as selisih_pulang, DATE_FORMAT(masuk, "%H:%i:%s") as jam_masuk, DATE_FORMAT(pulang, "%H:%i:%s") as jam_pulang ');
  $this->db->where('pegawai_id', $id_karyawan);
  $this->db->where('tanggal >=', $tgl_awal);
  $this->db->where('tanggal <=', $tgl_akhir);
  $data = $this->db->get('absensi');
  echo json_encode($data->result());
}
function _make_sure_is_super_admin(){
  $status = $this->session->userdata('status_login');
  $id_admin = $this->session->userdata('id_admin_login');
  $admin = $this->db->get_where('admin', array('id'=>$id_admin));
  foreach ($admin->result() as $value) {
    $level = $value->level;
  }
  if (isset($level)) {
    if ($level != "1") {
      $this->session->sess_destroy();
      redirect('login','refresh');
    }
  }else{
    $this->session->sess_destroy();
    redirect('login','refresh');
  }
}
public function _make_sure_is_admin(){
  $is_user = $this->session->userdata('status_login');
  if ($is_user != "admin_login") {
    $this->session->sess_destroy();
    redirect('login','refresh');
  }
}
function logout(){
  $this->session->sess_destroy();
  redirect('adm','refresh');
}

}
/* End of file ${TM_FILENAME:admin.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Admin/:application/controllers/admin.php} */
