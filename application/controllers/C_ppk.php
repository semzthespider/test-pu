<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ppk extends CI_Controller {

		
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_ppk','user_model'));
		$p = $this->system_model->getMenuId('C_ppk');
		$this->d = $this->system_model->getPermission($this->session->role,$p);
		$this->pg = 'C_ppk';
		$this->load->library('ssp');
	}
	public function index(){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['permit'] = $this->d;
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('data_berkas/ppk');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}	
	}
	public function views(){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['permit'] = $this->d;
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('data_berkas/ppk');
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
					"untuk_pembayaran" => $_POST['untuk_pembayaran'],
					"tggl" => $_POST['tggl'],
					"jenisanggaran" => $_POST['jenisanggaran'],
					"id_penerima" => $_POST['id_penerima']
				);
				$this->surat_model->add_surat($data);
				redirect($this->pg);
			}else{
				redirect('home/view');	
			}
		}else{
			$this->login();
		}
	}

	public function delete($kd_pembebanan)
	{
		if($this->user_model->getSecure()){
			if($this->d['d']==1){
				$this->surat_model->delete_surat($kd_pembebanan, $data);
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

	public function view($id_user){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['res'] = $this->M_ppk->list_unit($id_user);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('data_berkas/kirimberkas3');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}	
	}


public function update()
		{
			if($this->user_model->getSecure()){
				if($this->d['w']==1){
					$user_id1["ps1"] 					= $this->input->post("ps1");
					$user_id1["ps2"] 					= $this->input->post("ps2");
					$user_id1["ps3"] 					= $this->input->post("ps3");
					$user_id1["ps4"] 					= $this->input->post("ps4");
					$user_id1["ps5"] 					= $this->input->post("ps5");
					$user_id1["ps6"] 					= $this->input->post("ps6");
					$user_id1["ps7"] 					= $this->input->post("ps7");
					$user_id1["ps8"] 					= $this->input->post("ps8");
					$user_id1["ps9"] 					= $this->input->post("ps9");
					$user_id1["ps10"] 					= $this->input->post("ps10");
					$user_id1["ps11"] 					= $this->input->post("ps11");
					$user_id1["ps12"] 					= $this->input->post("ps12");
					$user_id1["ps13"] 					= $this->input->post("ps13");
					$user_id1["ps14"] 					= $this->input->post("ps14");
					$user_id1["ps15"] 					= $this->input->post("ps15");
					$user_id3["n_date5"] 				= $this->input->post("n_date5");
					$user_id3["r_date6"] 				= $this->input->post("r_date6");
					$user_id3["n_date6"] 				= $this->input->post("n_date6");
					$user_id1["ps16"] 					= $this->input->post("ps16");
					$user_id1["ps17"] 					= $this->input->post("ps17");
					$user_id1["ps18"] 					= $this->input->post("ps18");
					$user_id1["ps19"] 					= $this->input->post("ps19");
					$user_id1["ps20"] 					= $this->input->post("ps20");
					$user_id1["ps21"] 					= $this->input->post("ps21");
					$user_id1["ps22"] 					= $this->input->post("ps22");
					$user_id1["ps23"] 					= $this->input->post("ps23");
					$user_id1["ps24"] 					= $this->input->post("ps24");
					$user_id1["ps25"] 					= $this->input->post("ps25");
					$user_id1["ps26"] 					= $this->input->post("ps26");
					$user_id2["id_status"] 				= $this->input->post("id_status");
					$user_id2["jenisanggaran"] 			= $this->input->post("jenisanggaran");
					$user_id2["id_penerima"] 			= $this->input->post("id_penerima");
					$user_id2["id_kelengkapan"] 		= $this->input->post("id_kelengkapan");
					$user_id2["idh4"] 					= $this->input->post("idh4");
					$user_id2["catatan"] 				= $this->input->post("catatan");
					$kd_pembebanan = $this->input->post('kd_pembebanan');
					$where = array('kd_pembebanan'=>$kd_pembebanan);
					$this->M_ppk->updatedata('tbl_status3',$user_id1,$where);
					$this->M_ppk->updatedata('tbl_berkas',$user_id2,$where);
					$this->M_ppk->updatedata('tbl_date',$user_id3,$where);
					redirect($this->pg);
				}else{
					redirect('Surat_verifikasi');	
				}
			}else{
				$this->login();
			}
		}
	
}