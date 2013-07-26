<?php 

class User_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function viewUsers(){
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
			return $query;
		else
			return false;
	}

	function viewUser($idUser){
		$this->db->where('id' , $idUser);
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
			return $query;
		else
			return false;
	}

	function createUser($data){
		$this->db->insert('users',array('name' => $data['nombre']));
	}

	function updateUser($idUser,$data){
		$this->db->where('id' , $idUser);
		$query = $this->db->update('users',array('name' => $data['nombre']));
	}

	function deleteUser($idUser){
		$this->db->delete('users',array('id' => $idUser));
	}	
}
?>