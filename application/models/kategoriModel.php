<?php 

class KategoriModel extends CI_Model {

			public function getAll($sort='DESC')
			{
				$this->db->order_by('ID_kategori', $sort);
				$query= $this->db->get('kategori');  
				return $query->result();
			}

			public function stringToIndex()
			{
				$data = $this->db->get('kategori');
		        foreach ($data->result() as $rowl)
		        {
		            $stack['indx'][$rowl->jenis]= $rowl->ID_kategori; 
		        }
		        return $stack;
			}

			public function cekKategori($jenis)
			{
				
				$query = $this->db->get_where('kategori', array('jenis'=>$jenis)); //select * from admin where username='lingga'
				if ($query->num_rows() == 0) return TRUE;
				else return False;
			}

			public function addKategori($jenis)
			{
				if ($this->cekKategori($jenis)){
				$this->db->insert('kategori',array('jenis'=>$jenis)); return TRUE;
				} else 
				return  ($this->cekKategori($jenis));
			}

			public function updateKategori($id,$jenis)
			{
				if ($this->cekKategori($jenis)){
					 $this->db->where('ID_kategori', $id);
	                 $this->db->update('kategori', array('jenis'=>$jenis));
	                 return TRUE;
	            } else 
				return  ($this->cekKategori($jenis));
			}

			public function readKategori($id)
			{
			$query = $this->db->get_where('kategori', array('ID_kategori'=>$id)); 
			return $query->result();
			}
}
 ?>
