<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {

  public function index(){

      $this->db->select('*');
      $this->db->from('barang');
      $this->db->limit(50000);
      $query = $this->db->get();
      echo json_encode($query->result());
  }
}
/* End of file ${TM_FILENAME:test.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Test/:application/controllers/test.php} */
