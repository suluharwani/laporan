<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('mdl_login');
  }
  public function index(){
    $jumlah_admin = $this->db->get('admin')->num_rows();
    $submit = $this->input->post('submit',TRUE);
    if ($jumlah_admin<1) {
      $data['title'] = 'Register';
      if ($submit=="register") {
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $username = $this->input->post('username');
        $password = $this->bcrypt->hash_password($this->input->post('password'));
        // $no_hp = $this->input->post('no_hp');
        $object = [
          'nama_depan' => $nama_depan,
          'nama_belakang' => $nama_belakang,
          'level' => '1',
        ];
        $id_admin = $this->mdl_login->insert_new_admin($object);
        $object_login = [
          'username' => $username,
          'password' => $password,
          'id_admin' => $id_admin,
        ];
        // $this->db->insert('admin', $object);
        $aff_row = $this->mdl_login->insert_login_admin($object_login);
        if ($aff_row>0) {
          redirect('admin','refresh');
        }
      }
      $this->load->view('register/register', $data);
    }else{
      $data['title'] = 'Login';
      if ($submit=="submit") {
        //proses login
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hasil = $this->mdl_login->login_admin($username,$password);
        if ($hasil==true) {
          $adm = $this->mdl_login->adm($username);
          foreach ($adm->result() as $value) {
            $id_admin = $value->id;
          }
          $this->session->set_userdata(array('status_login' => 'admin_login', 'id_admin_login' => $id_admin));
          redirect('/admin');
        }else{
          $data['salah'] = "<font color='red'>Username atau password tidak ada!</font>";
          // $this->load->view('login/login', $data);
        }
      }
      $this->load->view('login/login', $data);
    }
  }
  public function check_panjang_password($str)
  {
    if (strlen($str) >= 5){
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('password_check', '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
      </i>Password minimal 5 karakter</span></label>');
      return FALSE;
    }
  }
  public function check_panjang_username($str)
  {
    if (strlen($str) >= 5){
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('username_check', '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
      </i>Username minimal 5 karakter</span></label>');
      return FALSE;
    }
  }
  public function check_username()
  {
    if($this->mdl_login->get_username($_POST['username']) || strlen($_POST['username']) <5 ){
      echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
      </i> Username telah digunakan atau kurang dari 5 karakter</span></label>';
    }
    else {
      echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Username tersedia</span></label>';
    }
  }
  public function check_password()
  {
    $pass1 = $_POST['password'];
    $pass2 = $_POST['confirm_password'];
    if ($pass1 == $pass2 && strlen($pass1)>=5) {
      $hasil = true;
    }else{
      $hasil = false;
    }
    if($hasil){
      echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Password Sesuai</span></label>';
    }
    else {
      echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
      </i>Password tidak sama atau kurang dari 5 karakter</span></label>';

    }
  }
  public function check_password_panjang()
  {
    $pass1 = $_POST['password'];

    if (strlen($pass1)>=5) {
      $hasil = true;
    }else{
      $hasil = false;
    }
    if($hasil){
      echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Password dapat dipakai</span></label>';
    }
    else {
      echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
      </i>Password kurang dari 5 karakter</span></label>';

    }
  }
  function logout(){
    $this->session->sess_destroy();
    redirect('/','refresh');
  }
}
