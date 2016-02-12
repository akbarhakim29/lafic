<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
            $this->load->model('detailModel');
            $data['detail']=$this->detailModel->getAllDetail('ID_detail');
			$data['lokasi']=$this->recompose();

			$data2=$this->listMap($data);
			
            $this->load->view('header', $data2);
            $this->load->view('view1',$data2);
           
            
	}
        
       
	public function msgUpload()
	{
		$datestring = "%Y-%m-%d %h:%i:%a";
		$time = time();
		$waktu=mdate($datestring, $time);

		$data['judul']= $this->input->post('subjek');
		$data['nama']= $this->input->post('nama');
		$data['email']= $this->input->post('email');
		$data['isi']= $this->input->post('isi');
		$data['waktu']= $waktu;
		$this->load->model('pesanModel');
		$status=$this->pesanModel->insert($data);
				if ($status)
				{
				$this->index();
			}
	}

	

	public function listMap($data)
	{
		//MAP
			$this->load->library('googlemaps');
			$iconLost = base_url().'/assets/images/iconLost.png';
			$iconFound= base_url().'/assets/images/iconFound.png';
			$config['center'] = '-7.95601 , 112.61594';
			$config['zoom'] = 'auto';
			$this->googlemaps->initialize($config);
			$this->load->model('lokasiModel');
			$lokasi=$this->lokasiModel->getAllLokasi('ASC');
			//$jum=sizeof($data['detail'][$i]);
			
			 foreach ($lokasi as $key ) {
			 	if($data['lokasi'][$key->ID_lokasi]['0']['count']!=0)
			 	{
				 	$marker = array();
					$marker['position'] = $data['lokasi'][$key->ID_lokasi]['0']['lat'].','.$data['lokasi'][$key->ID_lokasi]['0']['lang'];
					$marker['draggable'] = False;
	                        $str="<h2>".$key->nama."</h2>";
					$marker['infowindow_content'] = $str."</br>"." <b>".$data['lokasi'][$key->ID_lokasi]['0']['count']." Kehilangan </b>";
					$marker['icon'] = $iconLost;				
					$this->googlemaps->add_marker($marker);
				}
				if($data['lokasi'][$key->ID_lokasi]['1']['count']!=0)
			 	{
				 	$marker = array();
					$marker['position'] = $data['lokasi'][$key->ID_lokasi]['1']['lat'].','.$data['lokasi'][$key->ID_lokasi]['1']['lang'];
					$marker['draggable'] = False;
	                        $str="<h2>".$key->nama."</h2>";
					$marker['infowindow_content'] = $str."</br>"." <b>".$data['lokasi'][$key->ID_lokasi]['1']['count']." Penemuan </b>";
					$marker['icon'] = $iconFound;				
					$this->googlemaps->add_marker($marker);
				}

			}
			$data['map']=$this->googlemaps->create_map();
			return $data;
			//ENDMAP
	}


	public function recompose()
	{
		$this->load->model('lokasiModel');
		$lokasi=$this->lokasiModel->getAllLokasi('ASC');
		

		$this->load->model('detailModel');
		$det=$this->detailModel->getAllDetail('ID_detail');

		foreach ($lokasi as $key ) {
			$data[$key->ID_lokasi]['0']['count']=0;
			$data[$key->ID_lokasi]['1']['count']=0;
			$data[$key->ID_lokasi]['0']['lat']=$key->lat;
			$data[$key->ID_lokasi]['1']['lat']=$key->lat;
			$data[$key->ID_lokasi]['0']['lang']=$key->att;
			$data[$key->ID_lokasi]['1']['lang']=$key->att+0.00015;
			$data[$key->ID_lokasi]['0']['nama']=$key->nama;
			$data[$key->ID_lokasi]['1']['nama']=$key->nama;
		}

		foreach ($det['data0'] as $keydet ) {
			foreach ($lokasi as $keylok) {
				if ($det['data1'][$keydet->ID_detail]['2']['nama']===$keylok->nama)
				{
					if ($det['data1'][$keydet->ID_detail]['0']['status']==0)
					{
						$data[$keylok->ID_lokasi]['0']['count']++;	
					}
					if ($det['data1'][$keydet->ID_detail]['0']['status']==1)
					{
						$data[$keylok->ID_lokasi]['1']['count']++;
					}
				}
			}
		}

		return $data;
	}


}

