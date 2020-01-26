<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_unit extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function list_unit($id=null,$par=null,$args=null){
		$this->db->select('a.*');
		$this->db->from('unit a');
		if(!empty($id)){ $this->db->where('unit_id',$id); }
		if(!empty($par)){ if($par=='y'){ $par=0; }$this->db->where('unit_parent',$par); }
		if(!empty($args) && is_array($args)){ $this->db->where_in('unit_id',$args); }
		$this->db->order_by('unit_id', 'ASC');
		return $this->db->get();
	}
	public function add_unit($data){
		return $this->db->insert('unit',$data);
	}
	public function edit_unit($param,$data){
		$this->db->where('unit_id',$param);
		return $this->db->update('unit',$data);
	}
	
	public function delete_unit($param){
		$this->db->where('unit_id',$param);
		return $this->db->delete('unit');
	}
}