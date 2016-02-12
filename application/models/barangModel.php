<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class BarangModel extends CI_Model{
// fungsi konstruktor
		


		public function getBarang($id){
			$data = array();
			$this->db->where('ID_barang',$id);
			$this->db->limit(1);
			$Q = $this->db->get('barang');
			if($Q->num_rows() > 0){
			$data = $Q->row_array();
			}
			$Q->free_result();
			return $data;
		}


		public function getAllBarang($orderby){
			
			$this->db->order_by($orderby);
			$Q = $this->db->get('barang');
			return $Q;
		}

		public function addBarang($data){
			
				$this->db->insert('barang',$data);
				return TRUE;

		}


		public function editBarang($data,$id){
			if ($this->check_id($id))
			{
				$this->db->where('ID_barang',$id);
				$this->db->update('barang',$data);
				return TRUE;
			}
			return;
		}

		public function delete($id)
		{
			// Loading database library
			$this->load->database();
			// Check the existing data
			if ($this->check_id($id))
			{
				// Found? Now delete it
				$this->db->delete('pesan', array('ID_barang' => $id));
			}
			return TRUE;
		}

		public function check_id($id) //user=lingga
		{
			// Loading database library
			$this->load->database();
			
			$query = $this->db->get_where('barang', array('ID_barang'=>$id)); 
			if ($query->num_rows() !== 0) return TRUE;
			return ;
		}

		public function fetchLastID()
		{
			$this->db->order_by('ID_barang', 'DESC');
		    $query = $this->db->get('barang', 1);
		    foreach ($query->result() as $key ) {
		    	 $result=$key->ID_barang;
		    }
		    return $result ;
		}

		public function updateBarang($id,$data)
		{
			
			if ($this->check_id($id))
			{
				$this->db->where('ID_barang', $id);
				$this->db->update('barang', $data);
				return TRUE;
			}

			return;
		}

}
?>