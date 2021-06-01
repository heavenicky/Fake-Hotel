<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		if($this->session->userdata('email')){
			if($this->session->userdata('role_id') == 1){
				redirect('admin');
			}
			else{
				redirect('user');
			}
		}

		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if($this->form_validation->run() == false){
			$this->load->view('template/log_head');
			$this->load->view('auth/login');
		}
		else{
			$this->login();
		}
	}

	private function login(){
		$email = $this->input->POST('email');
		$password = $this->input->POST('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				if($user['role_id'] == 1){
					redirect('admin');
				}
				else{
					redirect('user');
				}
			}
			else{
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger" role="alert">
					Wrong password!
				</div>');
			redirect('login');
			}
		}
		else{
			$this->session->set_flashdata('message', 
				'<div class="alert alert-danger" role="alert">
					Email is not registered!
				</div>');
			redirect('login');
		}
	}

	public function register(){
		if($this->session->userdata('email')){
			if($this->session->userdata('role_id') == 1){
				redirect('admin');
			}
			else{
				redirect('user');
			}
		}

		$this->form_validation->set_rules('namadepan', 'first name', 'required|trim');
		$this->form_validation->set_rules('namabelakang', 'last name', 'required|trim');
		$this->form_validation->set_rules('tanggallahir', 'birth date', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]',['is_unique' => 'Email has already used']);
		$this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[6]|max_length[32]|matches[password2]',['matches' => 'Password dont match']);
		$this->form_validation->set_rules('password2', 'repeat password', 'required|trim|matches[password1]');


		if($this->form_validation->run() == false){
			$this->load->view('template/log_head');
			$this->load->view('auth/register');
		}
		else{
			$data = [
				'namadepan' => $this->input->POST('namadepan', TRUE),
				'namabelakang' => $this->input->POST('namabelakang', TRUE),
				'tanggallahir' => $this->input->POST('tanggallahir'),
				'email' => $this->input->POST('email', TRUE),
				'profilepic' => 'default.png',
				'password' => password_hash($this->input->POST('password1'), PASSWORD_DEFAULT),
				'role_id' => 2
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', 
				'<div class="alert alert-success" role="alert">
					Congratulation! your account has been created. Please Login
				</div>');
			redirect('login');
		}
	}

	public function logout(){
	$this->session->unset_userdata('email');
	$this->session->unset_userdata('role_id');
	$this->session->set_flashdata('message', 
				'<div class="alert alert-success" role="alert">
					Logout Success!
				</div>');
	redirect('login');
	}

	public function blocked(){
		$this->load->view('auth/blocked');
	}
}
?>