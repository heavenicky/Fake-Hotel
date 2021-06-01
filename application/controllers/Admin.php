<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['hotel'] = $this->db->get('hotel')->result();
		$this->load->view('template/header', $data);
		$this->load->view('admin/index.php', $data);
	}
	
	function hapus($hotel){
		$where = array('id' => $hotel);
		$this->data->hapus_data($where,'hotel');
		redirect('admin/index');
	}

	public function add(){
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['hotel'] = $this->db->get('hotel')->result();
		$this->load->view('template/header', $data);
		$this->load->view('admin/add', $data);
	}

	public function addmobil(){
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->add();
		}
		else{
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');
			$foto = $_FILES['foto']['name'];
			if($foto){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/images/hotel';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Gambar Gagal Diupload";
				}
				else{
					$foto = $this->upload->data('file_name');
				}
			}
		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'jumlah_kamar' => $jumlah,
			'gambar' => $foto
		);

		$this->db->insert('hotel', $data);
		$this->session->set_flashdata('message', 
				'<div class="alert alert-success" role="alert">
					Congratulation! hotel has been added.
				</div>');
		redirect('admin');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim|greater_than[0]');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|greater_than_equal_to[0]');
		if (empty($_FILES['foto']['name']))
		{
		    $this->form_validation->set_rules('foto', 'Foto', 'required');
		}
		}

	public function ubah($id){
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$where = array('id' => $id);
		$data['detail'] = $this->data->edit_data($where,'hotel')->result();
		$this->load->view('template/header', $data);
		$this->load->view('admin/ubah', $data);
	}

	public function update_hotel(){
		$id_hotel = $this->input->post('id');
		$nama = $this->input->post('nama');
		$sisa = $this->input->post('sisa');
		$harga = $this->input->post('harga');
	
		
		$this->db->set('nama', $nama);
		$this->db->set('harga', $harga);
		$this->db->set('jumlah_kamar', $sisa);

		$this->db->where('id', $id_hotel);
		$this->db->update('hotel');
		$this->session->set_flashdata('message', 
				'<div class="alert alert-success" role="alert">
					Congratulation! hotel has been updated.
				</div>');
		redirect('admin');
	}
}

?>