<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_insert_batch extends CI_Model {
  function batchInsert($data){
        //get bill entries
        $count = count($data['count']);

        for($i = 0; $i<$count; $i++){ $entries[] = array( 'date'=>$data['jdate'][$i],
                'type'=>$data['jtype'][$i],
                'passenger'=>$data['jpassanger'][$i],
                'from_'=>$data['jfrom'][$i],
                'to_'=>$data['jto'][$i],
                'ticket'=>$data['jticket_no'][$i],
                'amount'=>$data['jamount'][$i],
                );
        }
        $this->db->insert_batch('journey', $entries);
        if($this->db->affected_rows() > 0)
            return 1;
        else
            return 0;
        }
    function update($user){
      $data = array();
		foreach($_POST['dt'] as $user)
		{
			$data[] = $user;

		}
		$this->db->update_batch('product_detail' , $data , 'id_product_detail' );
    }
}
/* End of file ${TM_FILENAME:mdl_insert_batch.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_insert_batch/:application/models/mdl_insert_batch.php} */
