<?php 

function is_logged_in(){
	$uas = get_instance();
	if(!$uas->session->userdata('email')){
		redirect('login');
	}
	else{
		$role_id = $uas->session->userdata('role_id');
		$menu = $uas->uri->segment(1);

		$queryMenu = $uas->db->get_where('user_menu', ['menu' => $menu]) -> row_array();
		$menu_id = $queryMenu['id'];
		$userAccess = $uas->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);

		if($userAccess->num_rows() < 1){
			redirect('login/blocked');
		}
	}
}

 ?>