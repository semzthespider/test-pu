<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->model(array('user_model',));
	}	

	public function index()
	{
		$this->beranda();
	}
	
	public function beranda() {
		if($this->user_model->getSecure()) {
			$this->load->view('elemen/header');
			$this->load->view('elemen/nav');
			$this->load->view('Home');
			$this->load->view('elemen/footer');
		}else{
		$this->login();
		}
	}
	public function login() {
		$this->load->view('login');
	}
	
    public function profile($nip)
	{		
		$output['profile'] = $this->
		profile_model->data_profile($nip);
		$output['nip'] = $nip;
		//echo '<h1>'.$nip.'</h1>';
		//echo 'Nama   :   '.$data[$nip]['nama'].'<br>';
		//echo '<hr>';
		//echo 'Umur   :   '.$data[$nip]['umur'].' Tahun<br>';
		$this->load->view('profile',$output);
	}
	
}
