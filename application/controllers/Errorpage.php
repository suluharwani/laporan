<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errorpage extends CI_Controller {
public function __construct(){
    parent::__construct();
 }
	public function index()
	{
		 // $this->output->set_status_header('404');
		 $this->load->view('Error');
	}

}

/* End of file Error.php */
/* Location: ./application/controllers/Error.php */
