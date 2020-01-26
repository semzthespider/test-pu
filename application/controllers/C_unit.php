<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_unit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_unit'));
		$p = $this->system_model->getMenuId('C_unit');
		$this->d = $this->system_model->getPermission($this->session->role,$p);
		$this->pg = 'C_unit';
	}
	public function index(){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['permit'] = $this->d;
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('v_unit/unit');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}	
	}
	public function edit($id){
		if($this->user_model->getSecure()) {
			if($this->d['w']==1){
				$output['res'] = $this->M_unit->list_unit($id);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('v_unit/edit_unit');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}	
	}
	public function insert()
	{
		if($this->user_model->getSecure()){
			if($this->d['w']==1){
				$data = array(
					"unit_name" => $_POST['nm'],
					"unit_direktorat" => $_POST['direktorat']
				);
				
				$this->M_unit->add_unit($data);
				redirect($this->pg);
			}else{
				redirect('home/view');	
			}
		}else{
			$this->login();
		}
	}
	public function update()
	{
		if($this->user_model->getSecure()){
			if($this->d['w']==1){
				$data = array(
					"unit_name" => $_POST['nm'],
					"unit_direktorat" => $_POST['direktorat']
				);
				$this->M_unit->edit_unit($_POST['idu'], $data);
				redirect($this->pg);
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}
	}
	public function delete($id)
	{
		if($this->user_model->getSecure()){
			if($this->d['d']==1){
				$this->M_unit->delete_unit($id, $data);
				redirect($this->pg);
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}
	}
	public function login() {
		$this->load->view('login');
	}
}