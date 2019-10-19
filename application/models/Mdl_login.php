<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_login extends CI_Model {
  function insert_new_admin($object){
    $this->db->insert('admin',$object);
    return $this->db->insert_id();
  }
  function insert_login_admin($object_login){
      $this->db->insert('admin_login',$object_login);
      return $this->db->affected_rows();
  }
  function login_admin($username, $password){
    $this->db->where('username', $username);
    $query = $this->db->get('admin_login');
    if ($query->num_rows() < 1) {
      return false;
    }else{
      foreach ($query->result() as $value) {
        $stored_hash = $value->password;
        $id_admin = $value->id_admin;
      }
      $this->db->where('id', $id_admin);
      $adm_data = $this->db->get('admin');
      if ($this->bcrypt->check_password($password, $stored_hash)){
        $this->session->set_userdata(array('data_admin_login' => $adm_data->result()));
        return true;
      }
      else{
        return false;
      }
    }
  }
  function adm($username){
    $check = $this->db->get_where('admin_login',array('username' => $username));
    if ($check->num_rows()>0) {
      return $check;
    }
    else{
      return 0;
    }
  }
  function check_nisn($nisn){
    $check = $this->db->get_where('alumni',array('nisn' => $nisn));
    if ($check->num_rows()>0) {
      return 1;
    }
    else{
      return 0;
    }
  }
  public function get_username($username){
    $this->db->where('username', $username);
    $query = $this->db->get('admin_login');
    if ($query->num_rows() >0) {
      return true;
    }else{
      return false;
    }
  }
}
/* End of file ${TM_FILENAME:mdl_login.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_login/:application/models/mdl_login.php} */
