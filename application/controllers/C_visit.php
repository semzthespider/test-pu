<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_visit extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_visit','user_model'));
		$p = $this->system_model->getMenuId('C_visit');
		$this->d = $this->system_model->getPermission($this->session->role,$p);
		$this->pg = 'C_visit';
		$this->load->library('ssp');
	}
	public function index(){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['permit'] = $this->d;
				$bc['test'] = $this->M_visit->list_unit();
				$this->load->view('elemen/header',$output);
				$this->load->view('data_berkas/Visit',$bc);
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

	public function view($id_user){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['res'] = $this->M_asisten_ppk->list_unit($id_user);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('data_berkas/kirimsurat04');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}	
	}
	
}