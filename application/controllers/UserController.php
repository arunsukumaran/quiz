<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function registerUser()
	{
		if($this->input->POST()){
			$name = $this->input->POST( 'name' );
			$email = $this->input->POST( 'email' );
			$password = $this->input->POST( 'password' );
			$credentials = array(
					'name' => $name,
					'email' => $email,
					'password' => $password,				
				);

			$this->form_validation->set_rules( 'name','Username','required|max_length[100]|trim' );
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules( 'password','Password','required|max_length[100]|trim'
			 );
			// $this->form_validation->set_rules('cpass', 'Password Confirmation', 'required|matches[password]');

			if($this->form_validation->run()==false){
				$this->load->view( 'signup' );
			} else {
				$this->load->model('UserModel' );
				$this->UserModel->isUserExist($credentials);
				if(!$this->UserModel->isUserExist($credentials)){

					if(!$this->UserModel->saveUserRegisterDetails($credentials)){
						$data['error'] = "Sorry Something went Wrong!...";
						$this->load->view('signup',$data);
					} else{
						$data['message'] = "Thankyou for Signing up...";
						$this->load->view('signup',$data);
					}
				}else{
					$data['error']="User already exist...";
					$this->load->view('signup',$data);
				}
			}
		} else{
			$this->load->view('signup');
		}
	}

	public function loginUsers(){
		if( $this->input->post() ){

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]|trim');
			$this->form_validation->set_rules( 'password','Password','required|max_length[100]|trim');
			if( $this->form_validation->run()==false ){
				$data['error'] = "Sorry Something went Wrong!...";
				$this->load->view( 'login' , $data );
			} else {
				$email=$this->input->POST( 'email' );
				$password=$this->input->POST( 'password' );
				$credentials=array(
					'email'=>$email,
					'password'=>$password,
					);
				$this->load->model( 'UserModel' );

				if(!$this->UserModel->loginUserWithDetails( $credentials )){
					$data['error']="Something Went Wrong...";
					$this->load->view( 'login',$data );
				}else{
					$credentials=array(
						'email'=>$email,
						'password'=>$password,
						'loggedin'=>true,
						);
					$this->session->set_userdata($credentials);

					redirect(base_url().'index.php/dashboard');

				}
			}
		}else{
			$this->load->view('login');
		}
	}

	public function loggedin()
	{
		if(!empty($this->session->userdata('email'))){
			$this->load->model('UserModel');
			$datas['datas']=$this->UserModel->getDetailsFromDB();
			$this->load->view('dashboard',$datas);
		} else {
			redirect(base_url()."index.php/login");
		}
	}


	public function userLogout()
	{		
		$this->session->sess_destroy($email);
		redirect(base_url());
	}


}