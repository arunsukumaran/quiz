<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function saveUserRegisterDetails($credentials)
	{	

		if($this->db->insert('user',$credentials)){
			return true;
		} else {
			return false;
		}
	}

	public function loginUserWithDetails($credentials)
	{
		$this->db->select( '*' );
		$this->db->where('email',$credentials['email']);
		$this->db->where('password',$credentials['password']);
		$query=$this->db->get( 'user' );
		if ( $query->num_rows()>0 ){
			return true;
		} else {
			return false;
		}
	}

	public function getDetailsFromDB()
	{
		$datas=$this->db->get('user');
		return $datas->result_array();
	}
	public function isUserExist($credentials)
	{
		$this->db->select('*');
		$this->db->where('email',$credentials['email']);
		$query=$this->db->get('user');
		if($query->num_rows()>0){
			return true;
		} else {
			return false;
		}
	}

}
