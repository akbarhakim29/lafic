<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PesanModel extends CI_Model {


	
	public function insert($data) 
	{
		
		$this->db->insert('pesan',$data);
		return TRUE;		
	}
	
	public function check_id($id) //user=lingga
	{
		
		$query = $this->db->get_where('pesan', array('ID_msg'=>$id)); 
		if ($query->num_rows() !== 0) return TRUE;
		return ;
	}

	public function delete($id)
	{
		
		// Check the existing data
		if ($this->check_id($id))
		{
			// Found? Now delete it
			$this->db->delete('pesan', array('ID_msg' => $id));
		}
		return TRUE;
	}

	public function get_all() //$limit = array(4,0)
	{
		
		
		$this->db->order_by('waktu', 'DESC');
		
		
		$query = $this->db->get('pesan');
		
		if ($query->num_rows() != 0) return $query->result();
		return;
	}

	public function read($id)
	{
		$query = $this->db->get_where('pesan', array('ID_msg'=>$id)); 
		return $query->result();
	}

	public function hitungAll()
	{
		$hasil=$this->db->count_all_results('pesan');
		return $hasil;
	}

	


}
