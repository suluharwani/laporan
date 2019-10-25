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
    $data['title'] = "Karyawan";
    $this->load->view('admin/page/karyawan', $data);
  }
  function karyawan_list(){
    $this->load->model('Mdl_karyawan');
    $data = $this->Mdl_karyawan->karyawan_list();
    echo json_encode($data->result());
  }
  function get_karyawan_shift(){
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
