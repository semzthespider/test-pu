<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_unit'));
		$p = $this->system_model->getMenuId('user');
		$this->d = $this->system_model->getPermission($this->session->role,$p);
		$this->pg = 'C_user';
	}
	public function index(){
		if($this->user_model->getSecure()) {
			if($this->d['r']==1){
				$output['permit'] = $this->d;
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('v_user/user');
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
				$output['res'] = $this->user_model->list_user($id);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('v_user/edit_user');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}	
	}

	public function profile($id){
		if($this->user_model->getSecure()) {
			if($this->d['w']==1){
				$output['res'] = $this->user_model->list_user($id);
				$this->load->view('elemen/header',$output);
				$this->load->view('elemen/nav');
				$this->load->view('v_user/profile');
				$this->load->view('elemen/footer');
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}	
	}
	public function setting(){
		if($this->user_model->getSecure()){
			$output['res'] = $this->user_model->list_user($this->session->idu);
			$this->load->view('elemen/header',$output);
			$this->load->view('elemen/nav');
			$this->load->view('v_user/userpanel');
			$this->load->view('elemen/footer');
		}else{
			$this->load->view('home');
		}
	}
	public function insert()
	{
		if($this->user_model->getSecure()){
			if($this->d['w']==1){
				$this->form_validation->set_rules('unit_id', 'Unit', 'required');
		
				$this->form_validation->set_rules('role_id', 'Role', 'required');
		
				if ($this->form_validation->run() != FALSE)
		
				{
					$data = array(
			
								'unit_id' => $_POST['unit_id'],
			
								'role_id' => $_POST['role_id'],
			
								'user_fullname' => $_POST['user_fullname'],

								'alamat' => $_POST['alamat'],
			
								'email' => $_POST['email'],
			

								'user_password' => md5($_POST['password']),
			
								'user_name' => $_POST['user_name'],
			
								'notelp' => $_POST['telp'],


								'gender' => $_POST['gender'],

								'pekerjaan' => $_POST['pekerjaan'],
			
								'active' => $_POST['active'],

								'created_id' => $this->session->idu
			
							);
								if(!empty($_FILES['profpict']['tmp_name'])){
								$lokasi_file    = $_FILES['profpict']['tmp_name'];
								$tipe_file      = $_FILES['profpict']['type'];
								$nama_file      = $_FILES['profpict']['name'];
								//if($this->base_model->getTypeImages($tipe_file)){
									$nmf = $this->base_model->rnamef($nama_file);
									unlink('assets/images/'.$this->session->picture);
									$data['profpict']=$nmf;
									move_uploaded_file($lokasi_file,'assets/images/'.$nmf);
									$_SESSION['picture'] = $nmf;
				//}				
			}
					$this->db->insert('users', $data);
					redirect($this->pg);
				}
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
						  'unit_id' => $_POST['unit_id'],
	  
						  'role_id' => $_POST['role_id'],
	  
						  'user_fullname' => $_POST['user_fullname'],
	  
						  'email' => $_POST['email'],
	  
						  'user_name' => $_POST['user_name'],
	  
						  'notelp' => $_POST['telp'],

						  'alamat' => $_POST['alamat'],

						  'gender' => $_POST['gender'],

						  'pekerjaan' => $_POST['pekerjaan'],
	  
						  'active' => $_POST['active'],
		
					);
				if(!empty($_POST['password'])){
					$data['user_password']=md5($_POST['password']);
				}
				$this->db->where('user_id', $_POST['idu']);
				$this->db->update('users', $data);
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
				$this->db->where('user_id', $id);
				$this->db->delete('users');
				redirect($this->pg);
			}else{
				redirect('home');	
			}
		}else{
			$this->login();
		}
	}
	public function updatesetting()
	{
		if($this->user_model->getSecure()){
			$data = array(
  
					  'user_fullname' => $_POST['user_fullname'],
  
					  'email' => $_POST['email'],
  
					  'user_name' => $_POST['user_name'],
  
					  'notelp' => $_POST['telp']
	
				);
			if(!empty($_FILES['profpict']['tmp_name'])){
				$lokasi_file    = $_FILES['profpict']['tmp_name'];
				$tipe_file      = $_FILES['profpict']['type'];
				$nama_file      = $_FILES['profpict']['name'];
				//if($this->base_model->getTypeImages($tipe_file)){
					$nmf = $this->base_model->rnamef($nama_file);
					unlink('assets/images/'.$this->session->picture);
					$data['profpict']=$nmf;
					move_uploaded_file($lokasi_file,'assets/images/'.$nmf);
					$_SESSION['picture'] = $nmf;
				//}				
			}
			if(!empty($_POST['password'])){
				$data['user_password']=md5($_POST['password']);
			}
				$_SESSION['nmuser'] = $_POST['user_fullname'];
				$_SESSION['email'] = $_POST['email'];
			$this->db->where('user_id', $this->session->idu);
			$this->db->update('users', $data);
			redirect('c_user/setting');
		}else{
			$this->login();
		}
	}
	public function login() {
		$this->load->view('login');
	}
}