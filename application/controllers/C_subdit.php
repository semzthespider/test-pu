<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_subdit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_subdit','user_model'));
		$p = $this->system_model->getMenuId('C_subdit');
		$this->d = $this->system_model->getPermission($this->session->role,$p);
		$this->pg = 'C_subdit';
		$this->load->library('ssp');
	}
	public function index(){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['permit'] = $this->d;
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('data_berkas/subdit');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');
			}
		}else{
			$this->login();
		}
	}

	public function edit_kendali($kd_pembebanan){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['permit'] = $this->M_subdit>list_unit2($kd_pembebanan);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('edit/edit_kendali');
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
				$this->load->view('data_berkas/subdit');
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
				$user_id1["tggl"] 						= $this->input->post("tggl");
				$user_id1["idh1"] 						= $this->input->post("idh1");
				$user_id1["id_penerima"] 				= $this->input->post("id_penerima");
				$user_id1["jenisanggaran"]   			= $this->input->post("jenisanggaran");
				$user_id1["untuk_pembayaran"] 			= $this->input->post("untuk_pembayaran");
				$user_id8["kd_pembebanan"] 	    		= $this->input->post("kd_pembebanan");
				$user_id8["kepada_alamat"] 				= $this->input->post("kepada_alamat");
				$user_id8["npwp"] 						= $this->input->post("npwp");
				$user_id8["untuk_pembayaran"] 			= $this->input->post("untuk_pembayaran");
				$user_id8["jumlah_tagihan"] 			= $this->input->post("jumlah_tagihan");
				$user_id8["ppn"] 						= $this->input->post("ppn");
				$user_id8["pph"] 						= $this->input->post("pph");
				$user_id8["jumlah_potongan"] 	  	    = $this->input->post("jumlah_potongan");
				$user_id8["net"] 						= $this->input->post("net");
				$user_id1["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$user_id2["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$user_id8["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$user_id8["jenisanggaran"] 				= $this->input->post("jenisanggaran");
				$user_id3["id_srt2"] 					= $this->input->post("kd_pembebanan");
				$user_id4["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$user_id5["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$user_id6["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$user_id7["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$user_id1["id_kelengkapan"]		 		= $this->input->post("id_kelengkapan");
				$user_id1["subdit"] 					= $this->input->post("subdit");
				$user_id9["r_date1"] 					= $this->input->post("tggl");
				$user_id9["kd_pembebanan"] 				= $this->input->post("kd_pembebanan");
				$this->M_subdit->insertData('tbl_berkas',$user_id1);
				$this->M_subdit->insertData('tbl_status1',$user_id2);
				$this->M_subdit->insertData('tbl_status2',$user_id3);
				$this->M_subdit->insertData('tbl_status3',$user_id4);
				$this->M_subdit->insertData('tbl_status4',$user_id5);
				$this->M_subdit->insertData('tbl_status5',$user_id6);
				$this->M_subdit->insertData('tbl_status6',$user_id7);
				$this->M_subdit->insertData('tbl_kendali',$user_id8);
				$this->M_subdit->insertData('tbl_date',$user_id9);
					redirect($this->pg);
			}else{
				redirect('C_subdit');
			}
		}else{
			$this->login();
		}
	}

	public function delete($kd_pembebanan)
	{
		if($this->user_model->getSecure()){
			if($this->d['d']==1){
				$user_id1 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id2 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id3 		= array('id_srt2'=>$kd_pembebanan);
				$user_id4 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id5 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id6 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id7 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id8 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id9 		= array('kd_pembebanan'=>$kd_pembebanan);
				$user_id9 		= array('id_date'      =>$id_date);
				$this->M_subdit->deleteData('tbl_berkas',$user_id1);
				$this->M_subdit->deleteData('tbl_status1',$user_id2);
				$this->M_subdit->deleteData('tbl_status2',$user_id3);
				$this->M_subdit->deleteData('tbl_status3',$user_id4);
				$this->M_subdit->deleteData('tbl_status4',$user_id5);
				$this->M_subdit->deleteData('tbl_status5',$user_id6);
				$this->M_subdit->deleteData('tbl_status6',$user_id7);
				$this->M_subdit->deleteData('tbl_kendali',$user_id8);
				$this->M_subdit->deleteData('tbl_date',$user_id9);
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


	public function view($kd_pembebanan){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['res'] = $this->M_subdit->list_unit($kd_pembebanan);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('data_berkas/kirimberkas1');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');
			}
		}else{
			$this->login();
		}
	}

	public function selesai($id_user){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['res'] = $this->M_subdit->selesai($id_user);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('Data_surat/selesaibak');
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
				$data = array(
					"persyaratan1" => $_POST['persyaratan1'],
					"persyaratan2" => $_POST['persyaratan2'],
					"persyaratan3" => $_POST['persyaratan3'],
					"persyaratan4" => $_POST['persyaratan4'],
					"persyaratan5" => $_POST['persyaratan5'],
					"id_status" => $_POST['id_status'],
					"id_penerima" => $_POST['id_penerima'],
					"id_kelengkapan" => $_POST['id_kelengkapan'],
					"idh1" => $_POST['idh1']


				);
				$this->M_subdit->edit_surat($_POST['kd_pembebanan'], $data);
				redirect($this->pg);
			}else{
				redirect('home');
			}
		}else{
			$this->login();
		}
	}

}
