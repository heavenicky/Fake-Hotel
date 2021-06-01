<?php 

class Data extends CI_model{
	public function get_id($id){
		$hasil = $this->db->where('id', $id)->get('hotel');
		if($hasil->num_rows()>0){
			return $hasil->result();
		}
		else{
			return false;
		}
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
}

 ?>