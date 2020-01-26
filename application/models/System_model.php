<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');

class System_model extends CI_Model {
	//menus
	public function list_menus($id=null,$par=null,$sts=null,$args=null){
		$this->db->select('a.*, (select menu_name from menus where menu_id=a.menu_parent_id) as parents');
		$this->db->from('menus a');
		if(!empty($id)){ $this->db->where('menu_id',$id); }
		if(!empty($par)){ if($par=='y'){ $par=0; }$this->db->where('menu_parent_id',$par); }
		if(!empty($sts)){ $this->db->where('enabled',$sts); }
		if(!empty($args) && is_array($args)){ $this->db->where_in('menu_id',$args); }
		$this->db->order_by('menu_order', 'ASC');
		return $this->db->get();
	}
	//!menus
	
	//usergroup
	public function list_ugroup($id=null,$sys=null){
		$this->db->select('*');
		$this->db->from('tusergroup');
		if(!empty($id)){ $this->db->where('autono',$id); }
		if(!empty($sys)){ $this->db->where_not_in('autono', array(1)); }
		return $this->db->get();
	}
	public function gethirarki($info){
		$this->db->select('*');
		$this->db->from('tblhirarki');
		$this->db->where('kdroot',$info);
		$res = $this->db->get();
		if($res->num_rows() > 0){
			$val = array();
			foreach($res->result() as $m){
				$val[] = $m->unit_id;	
			}
		}else{
			$val = 0;	
		}
		return $val;
	}
	//!usergroup
	
	//usermenu
	public function list_usermenu($id=null,$idm=null,$rr=null){
		$this->db->select('*');
		$this->db->from('tusermenu');
		if(!empty($id)){ $this->db->where('grup_id',$id); }
		if(!empty($idm)){ $this->db->where('menu_id',$idm); }
		if(!empty($rr)){ $this->db->where('permission_r',$rr); }
		return $this->db->get();
	}
	//!usermenu
	
	//secure
	public function getMenuId($info){
		$this->db->select('menu_id');
		$this->db->from('menus');
		$this->db->where('menu_info',$info);
		$res = $this->db->get();
		if($res->num_rows() > 0){
			foreach($res->result() as $m){
				$val = $m->menu_id;	
			}
		}else{
			$val = 0;	
		}
		return $val;
	}
	public function getPermission($grup=null,$menu=null){
		if($this->session->role==1 || $this->session->role==2){
			$val['r'] = 1;	
			$val['w'] = 1;
			$val['d'] = 1;	
			$val['a'] = 1;
		}else{
			$this->db->select('*');
			$this->db->from('tusermenu');
			$data = array(	
						"grup_id"=>$grup,
						"menu_id"=>$menu
					);
			$this->db->where($data);
			$res = $this->db->get();
			if($res->num_rows() > 0){
				foreach($res->result() as $r){
					$val['r'] = $r->permission_r;	
					$val['w'] = $r->permission_w;
					$val['d'] = $r->permission_d;
					$val['a'] = $r->permission_a;
				}
			}else{
				$val['r'] = 0;	
				$val['w'] = 0;
				$val['d'] = 0;	
				$val['a'] = 0;	
			}
		}
		return $val;
	}
	//!secure
}

/* End of file layout_model.php */
/* Location: ./appl/models/layout_model.php */