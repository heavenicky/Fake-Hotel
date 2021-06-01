<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
	}

	public function index(){
	
	$data['user'] = $this->db->get_where('user', ['email' => 
	$this->session->userdata('email')])->row_array();
	$keyword = $this->input->post('keyword');
	if($keyword){
		$data['hotel'] = $this->hotel->get_keyword($keyword);
	}
	else{
		$data['hotel'] = $this->db->get('hotel')->result();
	}
	$this->load->view('template/header_user', $data);
	$this->load->view('user/index', $data);
	}

	

	public function profile(){
	$data['user'] = $this->db->get_where('user', ['email' => 
	$this->session->userdata('email')])->row_array();
	$this->load->view('template/header_user', $data);
	$this->load->view('user/profile', $data);
	}

	public function edit(){
	$data['user'] = $this->db->get_where('user', ['email' => 
	$this->session->userdata('email')])->row_array();


	$this->form_validation->set_rules('namadepan','Nama Depan','trim');
	$this->form_validation->set_rules('namabelakang','Nama Belakang','trim');
	$this->form_validation->set_rules('password1', 'password', 'trim|min_length[6]|max_length[32]|matches[password2]',['matches' => 'Password dont match']);
	$this->form_validation->set_rules('password2', 'repeat password', 'trim|matches[password1]');

	if($this->form_validation->run() == false){
		$this->load->view('template/header_user', $data);
		$this->load->view('user/edit', $data);
	}
	else{
		
		$email = $this->input->post('email');
		$namadepan = $this->input->post('namadepan');
		$namabelakang = $this->input->post('namabelakang');
		$password = password_hash($this->input->POST('password1'), PASSWORD_DEFAULT);
		$gambar = $_FILES['profilepic']['name'];

		if($gambar){
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			$config['upload_path'] = './assets/images/profile';
			
			$this->load->library('upload', $config);

			if($this->upload->do_upload('profilepic')){
				$old_img = $data['user']['profilepic'];
				if($old_img != 'default.png'){
					unlink(FCPATH . 'assets/images/profile/' . $old_img); 
				}

				$new_img = $this->upload->data('file_name');
				$this->db->set('profilepic', $new_img);
			}
			else{
				echo $this->upload->display_errors();
			}
		}

		$this->db->set('namadepan', $namadepan);
		$this->db->set('namabelakang', $namabelakang);
		$this->db->set('password', $password);
		$this->db->where('email', $email);
		$this->db->update('user');

		$this->session->set_flashdata('message', 
				'<div class="alert alert-success" role="alert">
					Your Profile Has Been Updated
				</div>');
		redirect('user/profile');
	}
	
	}

	public function detail($id){
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['detail'] = $this->hotel->get_id($id);
		$this->load->view('template/header_user', $data);
		$this->load->view('user/detail', $data);
	}

	public function booking($id){
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['detail'] = $this->hotel->get_id($id);
		$this->load->view('template/header_user', $data);
		$this->load->view('user/booking', $data);
	}

	public function tambah_booking(){
		$id_user = $this->input->post('id');
		$id_hotel = $this->input->post('id_hotel');
		$hari = $this->input->post('hari');
		$kamar = $this->input->post('kamar');
		$harga = $this->input->post('harga');
		$rating = $this->input->post('rating');
		$sisa = $this->input->post('sisa');

		$data = array(
			'id_user' => $id_user,
			'id_hotel' => $id_hotel,
			'jumlah_hari' => $hari,
			'jumlah_kamar' => $kamar,
			'total_harga' => ($kamar * $harga),
			'rating' => $rating
		);

		$this->db->insert('transaksi', $data);
		$jumlah = array(
			'jumlah_kamar' => ($sisa - $kamar)
		);

		$id = array(
			'id' => $id_hotel
		);

		$this->db->update('hotel', $jumlah, $id);
		$this->session->set_flashdata('message', 
				'<div class="alert alert-success" role="alert">
					Congratulation! transaction success.
				</div>');
		redirect('user');
	}

	public function history(){
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$pengguna = $this->session->userdata('email');
		$data['transaksi'] = $this->db->query("SELECT *FROM transaksi t, hotel h, user u WHERE t.id_hotel = h.id AND t.id_user = u.id AND u.email = '$pengguna'")->result();
		$this->load->view('template/header_user', $data);
		$this->load->view('user/history', $data);
	}

}

?>