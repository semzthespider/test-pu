<?php
  class M_user extends CI_model {
	  	public function __construct() {
			parent::__construct();
		}
		public function ceklogin($user,$pass) {
			$data = array(
							'user_name'=>$user,
							'user_password'=>md5($pass)
						  );
			$qry = $this->db->get_where('users',$data);
			if($qry->num_rows()>0) {
				foreach($qry->result() as $v) {
					$hasil = array(
								     'idu'=>$v->user_id,
								     'user'=>$v->user_name,
								     'user_full'=>$v->user_fullname,
								     'role'=>$v->role_id,
								     'picture'=>$v->profpict,
								     'units'=>$v->unit_id
								  );
				}
				$hasil['respon'] = 1;
			}else{
				$hasil['respon'] = 0;
		    }
   		    return $hasil;
		
		}
		public function getSecure() {
			if(!empty($this->session->idu) && !empty($this->session->user)  && !empty($this->session->role) ) {
				return 1;
			}else{
				return 0;
			}
		}
		public function getSecureSystem() {
			if(!empty($this->session->idu) && !empty($this->session->user)  && !empty($this->session->role)  && $this->session->role==1 ) {
				return 1;
			}else{
				return 0;
			}
		}
		public function list_user($id=null,$args=null){
			$this->db->select('a.*,(select unit_name from unit where unit_id=a.unit_id) as unit_name,(select group_name from tusergroup where autono=a.role_id) as role_name');
			$this->db->from('users a');
			if(!empty($id)){ $this->db->where('user_id',$id); }
			if(!empty($args) && is_array($args)){ $this->db->where_in('user_id',$args); }
			$this->db->order_by('user_id', 'ASC');
			return $this->db->get();
		}
  }
  