<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function index()
  {
    $this->_make_sure_is_admin();
    $data['title'] = "Dashboard";
    $this->load->view('admin/page/dashboard', $data);
  }
  public function gaji(){
    $this->_make_sure_is_admin();
    $data['title'] = "Gaji Pegawai";
    $this->load->view('admin/page/gaji', $data);
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
