<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {

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
    
//////////////////////////////////////////////////////////////////////////////////////////////////////// tampilan awal
    	public function index()
    	{
                $this->load->library('session');
                $sesiUser= $this->session->userdata('username');
                $sesiPassword= $this->session->userdata('password');


                if ($sesiUser&&$sesiPassword)
                {
                    $this->load->model('adminModel');
                    $tes1=$this->adminModel->check_id($sesiUser);
                    $tes2=$this->adminModel->check_password($sesiPassword);

                    if($tes1&&$tes2)
                    {
                        $data['username']= $this->session->userdata('username');
                        $data['password']= $this->session->userdata('password');
                        redirect('admin/homeWelcome');
                    }
                    else
                    {
                        redirect('admin/homeLogin');
                    }
                }
                
                else
                {
                    redirect('admin/homeLogin');
                }
                
    	}
/////////////////////////////////////////////////////////////////////////////////////////////////////// login
        public function cekLogin()
        {
            $this->load->model('adminModel');
            $this->load->library('session');

            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $data['username']=$username;
            $data['password']=$password;


            $this->session->set_userdata($data);
     

            if($this->adminModel->login($username,$password))
                {
                redirect('admin/homeWelcome');
                }
                else
                {
                  redirect('admin/homeLogin');
                }
            
        }
////////////////////////////////////////////////////////////////////////////////////////////////////// tampilan user
        public function viewUser()
        {
            $this->load->module('user');
            $this->user->index();
        }
////////////////////////////////////////////////////////////////////////////////////////////////////// tampilan Home
        public function homeLogin()
        {
            $this->load->view('headerLogin');
            $this->load->view('indexLogin');
        }

        public function homeWelcome()
        {

            $this->homeMain();
            $this->load->view('inkludInfo');
        }

        public function homeMain()
        {

            $this->load->library('session');
            $ket['username'] = $this->session->userdata('username'); 
            $this->load->model('pesanModel');
            $ket['jmlPesan']=$this->pesanModel->hitungAll();
            $this->load->view('headerAdd');
            $this->load->view('headerPage');

            $this->load->view('viewPageAtas2',$ket);
            $this->load->view('viewPageAtas');
            
            $this->load->view('viewPageSamping');
            
            
            
            
        }
        
        public function homeMsg()
        {
            $this->load->model('pesanModel');
            $data['result']=$this->pesanModel->get_all();
            $this->homeMain();
            $this->load->view('inkludListPesan',$data);
        }


        public function homeListMap()
        {
            $this->load->model('lokasiModel');
            $data['result']=$this->lokasiModel->getAllLokasi('ASC');
            $this->homeMain();
            $this->load->view('inkludListMaps',$data);
        }

        public function homeMap()
        {
            $this->load->model('lokasiModel');
            $data['detail']=$this->lokasiModel->getAllLokasi('ASC');
            $data2= $this->viewMapEdit($data);
            $this->homeMain();
            $this->load->view('inkludListAllMap',$data2);
        }
	
        public function homeNewLaporan($sukses=0)
        {

            $this->load->model('kategoriModel');
            $list=$this->kategoriModel->getAll('ASC');
                $data['sukses']=$sukses;
                foreach ($list as $key ) {
                    $data['kategori'][$key->jenis]=$key->jenis;
                  
                }

            $this->load->model('lokasiModel');
            $list=$this->lokasiModel->getAllLokasi('ASC');
          
                foreach ($list as $key ) {
                    $data['lokasi']['id'][$key->ID_lokasi]=$key->ID_lokasi;
                    $data['lokasi']['nama'][$key->nama]=$key->nama;
                   
                }
           // $data2= $this->viewMapEdit($data);
            $this->homeMain();
            $this->load->view('inkludNewLaporan',$data);
        }

        public function homeListLaporan()
        {
            $this->load->model('detailModel');
            $data['detail']=$this->detailModel->getAllDetail('ID_detail');
            $this->homeMain();
            $this->load->view('inkludListLaporan',$data);
        }

        public function homeListKategori($sukses=0,$updateOK=0,$id=NULL)
        {
            $this->load->model('kategoriModel');
            $data['kategori2']=$this->kategoriModel->getAll('DESC');
            $data['sukses']=$sukses;
            $data['updateOK']=$updateOK;
            $data['idKategori']=$id;
            if ($id!=NULL){
                $data['realData']=$this->kategoriModel->readKategori($id);
            }
            $this->homeMain();
            $this->load->view('inkludListKategori',$data);
        }

         public function homeUpdatePassword($sukses=0)
        {
            $this->load->library('session');
            $data['username'] = $this->session->userdata('username'); 
            $data['sukses']=$sukses;
            $this->homeMain();
            $this->load->view('inkludUpdatePassword',$data);
        }

        public function homeUpdateUsername($sukses=0)
        {
            $this->load->library('session');
            $data['username'] = $this->session->userdata('username'); 
            $data['sukses']=$sukses;
            $this->homeMain();
            $this->load->view('inkludUpdateUsername',$data);
        }
        public function homeLogout()
        {
            $this->load->library('session');
            $this->session->sess_destroy();
            redirect('admin/homeLogin');
        }

        public function homeAddMap($sukses=0)
        {
            $data2= $this->viewMap();
            $data2['sukses']=$sukses;
            $this->homeMain();
            $this->load->view('inkludNewMap',$data2);
        }

////////////////////////////////////////////////////////////////////////////////////////////////////// Message
        public function delMsg($id)
        {
             $this->load->model('pesanModel');
            $this->pesanModel->delete($id);
            redirect('admin/homeMsg');
        }

        public function readMsg($id)
        {
            $this->load->model('pesanModel');
            $data['read']=$this->pesanModel->read($id);
            $this->homeMain();
            $this->load->view('inkludBacaPesan',$data);
        }
//////////////////////////////////////////////////////////////////////////////////////////////////// maps
        
         public function addMap()
        {
            $datax['nama']=$this->input->post('nama');
            $datax['lat']=$this->input->post('latnew');
            $datax['att']=$this->input->post('langnew');


            $this->load->model('lokasiModel');
            $queryzz=$this->lokasiModel->cekLokasi($datax['nama']);
            if ($queryzz)
            {
                $query=$this->lokasiModel->insertLokasi($datax);
                if($query) $sukses=1; else $sukses=2;
            } else $sukses=3;

            $this->homeAddMap($sukses);
        }
         public function editMap($idLokasi, $sukses=0)
        {
            $this->load->model('lokasiModel');
            $data['detail']=$this->lokasiModel->getLokasi($idLokasi);
            $data['idLokasi']=$idLokasi;
            $data['sukses']=$sukses;
            $data2= $this->viewMapEdit($data);
            $this->homeMain();
            $this->load->view('inkludListMapEdit',$data2);
        }

        public function updateMap()
        {
            $idlocat=$this->input->post('idLok');
            $data['lat']=$this->input->post('latnew');
            $data['att']=$this->input->post('langnew');
            $data['nama']=$this->input->post('nama');

            $this->load->model('lokasiModel');
          
                $query=$this->lokasiModel->updateLokasi($data,$idlocat);
                if($query) $sukses=1; else $sukses=2;
          
            $this->editMap($idlocat,$sukses);
            
        }


        public function viewMapEdit($data)
        {
        //MAP
            $this->load->library('googlemaps');
         
            $icon= base_url().'/assets/images/iconFound.png';
            $config['center'] = '-7.956008900734134 ,112.61593421592124';
            $config['zoom'] = 'auto';
            $this->googlemaps->initialize($config);
            //$jum=sizeof($data['detail'][$i]);
             foreach ($data['detail'] as $detil){
                    
                    $marker = array();
                    $marker['position'] = $detil->lat.','. $detil->att;
                    $marker['draggable'] = true;
                            $str="<h2>".$detil->nama."</h2>";
                    $marker['infowindow_content'] = $str;
                    $marker['ondragstart'] = 'getLangLatStart(event.latLng.lat(), event.latLng.lng());';
                    $marker['ondragend'] = 'getLangLat(event.latLng.lat(), event.latLng.lng());';
                    
                    $marker['icon'] = $icon;                
                     
                    $this->googlemaps->add_marker($marker);
            }
            $data['map']=$this->googlemaps->create_map();
            return $data;
            //ENDMAP
        }

        public function viewMap()
        {
        //MAP
            $this->load->library('googlemaps');
         
            $icon= base_url().'/assets/images/iconFound.png';
            $config['center'] = '-7.956008900734134 ,112.61593421592124';
            $config['zoom'] = 'auto';
            $this->googlemaps->initialize($config);
            //$jum=sizeof($data['detail'][$i]);
         
                    
                    $marker = array();
                    $marker['position'] = '-7.956008900734134 ,112.61593421592124';
                    $marker['draggable'] = true;
                           
                    $marker['infowindow_content'] = "<h2>".'Nama Lokasi'."</h2>";
                    $marker['ondragstart'] = 'getLangLatStart(event.latLng.lat(), event.latLng.lng());';
                    $marker['ondragend'] = 'getLangLat(event.latLng.lat(), event.latLng.lng());';
                    
                    $marker['icon'] = $icon;                
                     
                    $this->googlemaps->add_marker($marker);
            
            $data['map']=$this->googlemaps->create_map();
            return $data;
            //ENDMAP
        }


       
/////////////////////////////////////////////////////////////////////////////////////////////////////// laporan
        public function addLaporan()
        {
            $this->load->model('lokasiModel');
            $indxlokasi=$this->lokasiModel->stringToIndex();

            $this->load->model('kategoriModel');
            $indxkategori=$this->kategoriModel->stringToIndex();

            $nama= $this->input->post('nama');
            $no_ktp= $this->input->post('no_ktp');
            $alamat= $this->input->post('alamat');
            $rt= $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kelurahan= $this->input->post('kelurahan');
            $kecamatan= $this->input->post('kecamatan');
            $jk= $this->input->post('jk');
            $pekerjaan= $this->input->post('pekerjaan');
            $no_kontak= $this->input->post('no_kontak');
            $statusSubjek= $this->input->post('status1');
            $keterangan= $this->input->post('isi');
            $statusBarang= $this->input->post('status2');
            $waktu= $this->input->post('waktu');
            $kategori= $indxkategori['indx'][$this->input->post('kategori')];
            $lokasi= $indxlokasi['indx'][$this->input->post('lokasi')];

            $dataSubjek['nama']=$nama;
            $dataSubjek['no_ktp']=$no_ktp;
            $dataSubjek['alamat']=$alamat;
            $dataSubjek['RT']=$rt;
            $dataSubjek['RW']=$rw;
            $dataSubjek['kelurahan']=$kelurahan;
            $dataSubjek['kecamatan']=$kecamatan;
            $dataSubjek['jenis_kelamin']=$jk;
            $dataSubjek['pekerjaan']=$pekerjaan;
            $dataSubjek['no_kontak']=$no_kontak;
            $dataSubjek['status']=$statusSubjek;

            $dataBarang['jenis']=$kategori;
            $dataBarang['waktu']=$waktu;
            $dataBarang['status']=$statusBarang;
            $dataBarang['keterangan']=$keterangan;

            $this->load->model('barangModel');
            $query1=$this->barangModel->addBarang($dataBarang);

            $this->load->model('subjekModel');
            $query2=$this->subjekModel->addSubjek($dataSubjek);
            
            $ID_subjek= $this->subjekModel->fetchLastID();
            $ID_barang= $this->barangModel->fetchLastID();
            
            $dataDetail['no_lokasi']=$lokasi;
            $dataDetail['no_barang']=$ID_barang;
            $dataDetail['no_subjek']=$ID_subjek;

            if($query1&&$query2){
                 $this->load->model('detailModel');
                 $query3=$this->detailModel->addDetail($dataDetail);
                 if($query3)$sukses=1; else $sukses=2;
            }

            $this->homeNewLaporan($sukses);
            //redirect('admin/homeNewLaporan');
  
        }

        public function updateLaporan()
        {
            $this->load->model('lokasiModel');
            $indxlokasi=$this->lokasiModel->stringToIndex();

            $this->load->model('kategoriModel');
            $indxkategori=$this->kategoriModel->stringToIndex();

            $nama= $this->input->post('nama');
            $no_ktp= $this->input->post('no_ktp');
            $alamat= $this->input->post('alamat');
            $rt= $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kelurahan= $this->input->post('kelurahan');
            $kecamatan= $this->input->post('kecamatan');
            $jk= $this->input->post('jk');
            $pekerjaan= $this->input->post('pekerjaan');
            $no_kontak= $this->input->post('no_kontak');
            $statusSubjek= $this->input->post('status1');
            $keterangan= $this->input->post('isi');
            $statusBarang= $this->input->post('status2');
            $waktu= $this->input->post('waktu');
            $kategori= $indxkategori['indx'][$this->input->post('kategori')];
            $lokasi= $indxlokasi['indx'][$this->input->post('lokasi')];

            
            $idBarang = $this->input->post('id_barang');
            $idSubjek = $this->input->post('id_subjek');
            $idDetail = $this->input->post('id_detail');

            $dataSubjek['nama']=$nama;
            $dataSubjek['no_ktp']=$no_ktp;
            $dataSubjek['alamat']=$alamat;
            $dataSubjek['RT']=$rt;
            $dataSubjek['RW']=$rw;
            $dataSubjek['kelurahan']=$kelurahan;
            $dataSubjek['kecamatan']=$kecamatan;
            $dataSubjek['jenis_kelamin']=$jk;
            $dataSubjek['pekerjaan']=$pekerjaan;
            $dataSubjek['no_kontak']=$no_kontak;
            $dataSubjek['status']=$statusSubjek;

            $dataBarang['jenis']=$kategori;
            $dataBarang['waktu']=$waktu;
            $dataBarang['status']=$statusBarang;
            $dataBarang['keterangan']=$keterangan;

            $this->load->model('barangModel');
            $query1=$this->barangModel->updateBarang($idBarang,$dataBarang);

            $this->load->model('subjekModel');
            $query2=$this->subjekModel->updateSubjek($idSubjek,$dataSubjek);
            
            $dataDetail['no_lokasi']=$lokasi;
            
            
           

            if($query1&&$query2){
                 $this->load->model('detailModel');
                 $query3=$this->detailModel->updateDetail($idDetail, $dataDetail);
                 if($query3)$sukses=1; else $sukses=2;
            }

            $this->formUpdateLaporan($idDetail,$sukses);
            //redirect('admin/homeNewLaporan');
  
        }


        public function readLaporan($id)
        {
            $this->load->model('detailModel');
            $data['detail']=$this->detailModel->read($id);
            $this->homeMain();
            $this->load->view('inkludBacaLaporan',$data);
        }

        public function readTerlapor($id)
        {
            $this->load->model('finishModel');
            $data['finish']=$this->finishModel->readFinish($id);

            $this->load->model('subjekModel');
            foreach ($data['finish'] as $key) {
                
            
            $data['detail']=$this->subjekModel->readSubjek($key->terlapor); }
            $this->homeMain();
            $this->load->view('inkludBacaTerlapor',$data);
        }

        public function formUpdateLaporan($id,$sukses=0)
        {
            $this->load->model('detailModel');
            $data['detail']=$this->detailModel->read($id);
           

            $this->load->model('kategoriModel');
            $list=$this->kategoriModel->getAll('ASC');
            $data['sukses']=$sukses;
                foreach ($list as $key ) {
                    $data['kategori'][$key->jenis]=$key->jenis;
                  
                }

            $this->load->model('lokasiModel');
            $list=$this->lokasiModel->getAllLokasi('ASC');
          
                foreach ($list as $key ) {
                    $data['lokasi']['id'][$key->ID_lokasi]=$key->ID_lokasi;
                    $data['lokasi']['nama'][$key->nama]=$key->nama;
                   
                }
            $this->homeMain();
            $this->load->view('inkludUpdateLaporan',$data);
        }

        public function formNewTerlapor($id,$sukses=0)
        {
            $data['sukses']=$sukses;
            $this->load->model('detailModel');
            $data['detail']=$this->detailModel->read($id);

            $this->homeMain();
            $this->load->view('inkludNewTerlapor',$data);
        }

        public function addTerlapor()
        {
            $nama= $this->input->post('nama');
            $no_ktp= $this->input->post('no_ktp');
            $alamat= $this->input->post('alamat');
            $rt= $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kelurahan= $this->input->post('kelurahan');
            $kecamatan= $this->input->post('kecamatan');
            $jk= $this->input->post('jk');
            $pekerjaan= $this->input->post('pekerjaan');
            $no_kontak= $this->input->post('no_kontak');
            $statusSubjek= $this->input->post('status1');

            $idDetail = $this->input->post('id_detail');
            $idBarang = $this->input->post('id_barang');

            $dataSubjek['nama']=$nama;
            $dataSubjek['no_ktp']=$no_ktp;
            $dataSubjek['alamat']=$alamat;
            $dataSubjek['RT']=$rt;
            $dataSubjek['RW']=$rw;
            $dataSubjek['kelurahan']=$kelurahan;
            $dataSubjek['kecamatan']=$kecamatan;
            $dataSubjek['jenis_kelamin']=$jk;
            $dataSubjek['pekerjaan']=$pekerjaan;
            $dataSubjek['no_kontak']=$no_kontak;
            $dataSubjek['status']=$statusSubjek;

            $dataBarang['status']=2;

            $this->load->model('subjekModel');
            $this->subjekModel->addSubjek($dataSubjek);
            $ID_subjek= $this->subjekModel->fetchLastID();


            $this->load->model('barangModel');
            $query2=$this->barangModel->updateBarang($idBarang,$dataBarang);

            $dataFinish['terlapor']=$ID_subjek;
            $dataFinish['pelapor']=$idDetail;

            $this->load->model('finishModel');
            $query1=$this->finishModel->addFinish($dataFinish);

            if($query2&&$query1)$sukses=1; else $sukses=2;
            

            redirect('admin/homeListLaporan');
            
        }


/////////////////////////////////////////////////////////////////////////////////////////////////////// kategori
        public function formNewKategori()
        {
            $kategori= $this->input->post('kategori');
            $this->load->model('kategoriModel');
            $query=$this->kategoriModel->addKategori($kategori);
            if($query)$sukses=1; else $sukses=3;
            $this->homeListKategori($sukses,0,NULL);
           //redirect('admin/homeListKategori',$sukses);
        }
        public function updateKategori()
        {
            $kategori= $this->input->post('kategori');
            $id= $this->input->post('id');
            $this->load->model('kategoriModel');
            $query=$this->kategoriModel->updateKategori($id,$kategori);
            if($query){$sukses=5;$this->homeListKategori($sukses,0,NULL);} else {$sukses=3;$this->homeListKategori($sukses,1,$id);}
            
           //redirect('admin/homeListKategori',$sukses);
        }
/////////////////////////////////////////////////////////////////////////////////////////////////////// admin
        public function updatePassword()
        {
            $username= $this->input->post('username');
            $passcur= $this->input->post('passcur');
            $passnew= $this->input->post('passnew');
            $passnew2= $this->input->post('passnew2');
            $this->load->library('session');
           
            if ($passnew!==$passnew2) $sukses=3;
            else
            {
                $this->load->model('adminModel');
                $query=$this->adminModel->update($username,$passcur,$passnew);
                if($query){
                    $sukses=1; 
                    $this->session->unset_userdata('password');
                    $this->session->set_userdata('password',$passnew);
                } else $sukses=2;
            }
            
            $this->homeUpdatePassword($sukses);
          
        }

        public function updateUsername()
        {
            $usernamenew= $this->input->post('usernamenew');
            $username= $this->input->post('username');
            $passcur= $this->input->post('password');
            $this->load->library('session');

                $this->load->model('adminModel');
                $query=$this->adminModel->updateuser($username,$usernamenew,$passcur);
                if($query){
                    $sukses=1;
                    $this->session->unset_userdata('username');
                    $this->session->set_userdata('username',$usernamenew);
                } else $sukses=2;
            
            
            $this->homeUpdateUsername($sukses);
          
        }


}

