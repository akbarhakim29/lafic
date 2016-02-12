<?php

class detailModel extends CI_Model{
    
    public function getAllDetail($orderby)
    {
        $this->db->order_by($orderby,'DESC');
        $dataDetil = $this->db->get('detail');
        foreach ($dataDetil->result() as $row)
        {
              
             $this->db->where('ID_barang',$row->no_barang);
             $querybrg= $this->db->get('barang');  
             $stack['data1'][$row->ID_detail][] = $querybrg->row_array();

             $this->db->where('ID_subjek',$row->no_subjek);
             $querysbj= $this->db->get('subjek');  
             $stack['data1'][$row->ID_detail][] = $querysbj->row_array();
             
             $this->db->where('ID_lokasi',$row->no_lokasi);
             $querylok= $this->db->get('lokasi'); 
             $stack['data1'][$row->ID_detail][] = $querylok->row_array();

             
              
              
        }
        $dataKategori = $this->db->get('kategori');
        foreach ($dataKategori->result() as $rowl)
        {
            $stack['data2']['katIndextoJenis'][$rowl->ID_kategori]= $rowl->jenis; 
        }
        $stack['data0']=$dataDetil->result();
        return $stack;
    }



    public function addDetail($data)
    {
            
                $this->db->insert('detail',$data);
                return TRUE;
    }

    public function read($id)
    {
        
        $this->db->order_by('ID_detail','DESC');
        $dataDetil = $this->db->get_where('detail', array('ID_detail'=>$id)); 
        foreach ($dataDetil->result() as $row)
        {
              
             $this->db->where('ID_barang',$row->no_barang);
             $querybrg= $this->db->get('barang');  
             $stack['data1'][$row->ID_detail][] = $querybrg->row_array();

             $this->db->where('ID_subjek',$row->no_subjek);
             $querysbj= $this->db->get('subjek');  
             $stack['data1'][$row->ID_detail][] = $querysbj->row_array();
             
             $this->db->where('ID_lokasi',$row->no_lokasi);
             $querylok= $this->db->get('lokasi'); 
             $stack['data1'][$row->ID_detail][] = $querylok->row_array();

             
              
              
        }
        $dataKategori = $this->db->get('kategori');
        foreach ($dataKategori->result() as $rowl)
        {
            $stack['data2']['katIndextoJenis'][$rowl->ID_kategori]= $rowl->jenis; 
        }
        $stack['data0']=$dataDetil->result();
        return $stack;
    }


    public function updateDetail($id,$data)
        {
            
                $this->db->where('ID_detail', $id);
                $this->db->update('detail', $data);
            

            return TRUE;
        }
}
?>
