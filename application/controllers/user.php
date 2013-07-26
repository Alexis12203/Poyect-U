<?php 
	class User extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('user_model');
		}

		function index(){
			$data['segment'] = $this->uri->segment(3);
			
			if(!$data['segment']){
				$data['users'] = $this->user_model->viewUsers();
			}
			else{
				$data['users'] = $this->user_model->viewUser($data['segment']);
			}

			$this->load->view('user/viewUsers',$data);
			
		}

		function newUser(){
			$this->load->view('user/addUser');
		}

		function addUser(){
			$data = array(
				'nombre' => $this->input->post('nombre')
			);
			$this->user_model->createUser($data);
			redirect('/user/index');
		}

		function editUser(){
			$data['idUser'] = $this->uri->segment(3);
			$data['user'] = $this->user_model->viewUser($data['idUser']);
			$this->load->view('user/editUser',$data);
		}

		function deleteUser(){
			$idUser = $this->uri->segment(3);
			$this->user_model->deleteUser($idUser);
			redirect('/user/index');
		}

		function updateUser(){
			$data = array(
				'nombre' => $this->input->post('nombre')
			);
			$this->user_model->updateUser($this->uri->segment(3),$data);
			redirect('/user/index');
		}
	}

?>