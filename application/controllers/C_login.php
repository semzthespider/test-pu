<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
			
	}

	public function otentikasi()
	{
		$this->load->model('user_model');
		$cek = $this->user_model->ceklogin($this->input->post('username'),$this->input->post('password'));
		if($cek['respon']==1){
			$this->session->set_userdata($cek);
			redirect(base_url('home/beranda'));
		}else{
				
		   redirect(base_url('home/login'));
		}
    }
	public function logout(){
		$data = array('respon','idu','user','role','picture','units');
		$this->session->unset_userdata($data);
		redirect(base_url());
	}
}
		