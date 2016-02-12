<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class SubjekModel extends CI_Model{

		public function addSubjek($data){
			
				$this->db->insert('subjek',$data);
				return TRUE;
		}

		public function fetchLastID()
		{
			$this->db->order_by('ID_subjek', 'DESC');
		    $query = $this->db->get('subjek', 1);
		    foreach ($query->result() as $key ) {
		    	 $result=$key->ID_subjek;
		    }
		    return $result ;
		}

		public function updateSubjek($id,$data)
		{
		
				$this->db->where('ID_subjek', $id);
				$this->db->update('subjek', $data);
				return TRUE;
			
		}
		public function readSubjek($id)
		{
		$query = $this->db->get_where('subjek', array('ID_subjek'=>$id)); 
		return $query->result();
		}
}