<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model {


	
	public function check_id($username) //user=lingga
	{
		// Loading database library
		$this->load->database();
		
		$query = $this->db->get_where('admin', array('username'=>$username)); //select * from admin where username='lingga'
		if ($query->num_rows() !== 0) return TRUE;
		return False;
	}

	public function check_password($password) //user=lingga
	{
		// Loading database library
		$this->load->database();
		
		$query = $this->db->get_where('admin', array('password'=>$password)); //select * from admin where username='lingga'
		if ($query->num_rows() !== 0) return TRUE;
		return False;
	}
        public function login($username,$pass) //user=lingga
	{
		// Loading database library
		$this->load->database();
		
		$query = $this->db->get_where('admin', array('username'=>$username,'password'=>$pass)); //select * from admin where username='lingga'
		if ($query->num_rows() !== 0) return TRUE;
		return ;
	}
	

	public function update($username, $passcur,$passnew)
	{
		
		if (($this->check_password($passcur))&&($this->check_id($username))){
			$this->db->where('username',$username);		
			$this->db->update('admin', array('password'=>$passnew)); //select * from admin where username='hakim' set password='baru'
			return TRUE;
		} else
		return False;
	}

	public function updateuser($username, $usernamenew,$password)
	{
		
		if (($this->check_password($password))&&($this->check_id($username))){
			$this->db->where('username',$username);		
			$this->db->update('admin', array('username'=>$usernamenew)); //select * from admin where username='hakim' set password='baru'
			return TRUE;
		} else
		return False;
	}

	


}
