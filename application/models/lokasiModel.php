<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LokasiModel extends CI_Model {

	private $tabel	= 'lokasi';
	//cek nama
	public function check_namaLokasi($nama)
	{
		// Loading database library
		$this->load->database();
		$query = $this->db->get_where('lokasi', array('nama'=>$nama));
		if ($query->num_rows() !== 0) return TRUE;
		return;
	}
	public function check_idLokasi($ID_lokasi)
	{
		// Loading database library
		$this->load->database();
		$query = $this->db->get_where('lokasi', array('ID_lokasi'=>$ID_lokasi));
		if ($query->num_rows() !== 0) return TRUE;
		return;
	}
		
	//==================================================CREATE DATA
	public function insertLokasi($data)
	{
		
		$this->db->insert($this->tabel, $data);
		return TRUE;
	}

	//==================================================READ DATA	
	public function getAllLokasi($sort = 'ASC')
	{
		// Loading database library
		$this->load->database();
		
		$this->db->order_by('ID_lokasi', $sort);
		
		$query = $this->db->get($this->tabel);
		
		if ($query->num_rows() != 0) return $query->result();
		
		return;
	}
	
	public function cekLokasi($nama)
	{
				
			$query = $this->db->get_where('lokasi', array('nama'=>$nama)); //select * from admin where username='lingga'
			if ($query->num_rows() == 0) return TRUE;
			else return False;
	}

	
	public function getLokasi($id)
	{
		$query = $this->db->get_where('lokasi', array('ID_lokasi'=>$id)); 
		return $query->result();
	}


	//==================================================UPDATE DATA
	public function updateLokasi($data,$id)
	{
		
		
			$this->db->where('ID_lokasi', $id);
			$this->db->update('lokasi',$data);
			return TRUE;
	}

	

	//==================================================DELETE DATA
	public function deleteLokasi($ID_lokasi)
	{
		// Loading database library
		$this->load->database();
		
		// Check the existing data
		if ($this->check_ID($ID_lokasi) === TRUE)
		{
			// Found? Now delete it
			$this->db->delete($this->tabel, array('ID_lokasi' => $ID_lokasi));
		}
		return;
	}

	public function stringToIndex()
	{
		 $data = $this->db->get('lokasi');
        foreach ($data->result() as $rowl)
        {
            $stack['indx'][$rowl->nama]= $rowl->ID_lokasi; 
        }
        return $stack;
	}

	

}
