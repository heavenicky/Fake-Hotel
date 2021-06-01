<?php 

class Hotel extends CI_model{
	public function get_id($id){
		$hasil = $this->db->where('id', $id)->get('hotel');
		if($hasil->num_rows()>0){
			return $hasil->result();
		}
		else{
			return false;
		}
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('hotel');
		$this->db->like('nama', $keyword);
		return $this->db->get()->result();
	}
}

 ?>