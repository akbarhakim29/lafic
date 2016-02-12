<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class FinishModel extends CI_Model{

		public function addFinish($data){
			
				$this->db->insert('finish',$data);
				return TRUE;
		}

		public function readFinish($id)
		{
		$query = $this->db->get_where('finish', array('pelapor'=>$id)); 
		return $query->result();
		}
}

?>