<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');


class M_asisten_ppk extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
   public function list_unit($kd_pembebanan=null,$par=null,$args=null){
        $this->db->select('*');
        $this->db->from('tbl_berkas ');
        $this->db->join('tbl_status2 ','id_srt2=kd_pembebanan');
        if(!empty($kd_pembebanan)){ $this->db->where('kd_pembebanan',$kd_pembebanan); }
        $this->db->where('id_penerima',2);
        $this->db->order_by('kd_pembebanan', 'ASC');
        return $this->db->get();
    }
       public function list_unit1($kd_pembebanan=null,$par=null,$args=null){
        $this->db->select('a.*');
        $this->db->from('tbl_berkas a');
        if(!empty($kd_pembebanan)){ $this->db->where('kd_pembebanan',$kd_pembebanan); }
        $this->db->where('idh3',3);
        $this->db->order_by('kd_pembebanan', 'ASC');
        return $this->db->get();
    }
    public function add_surat($data){
        return $this->db->insert('tbl_berkas',$data);
    }
    public function edit_surat($param,$data){
        $this->db->where('kd_pembebanan',$param);
        return $this->db->update('tbl_berkas',$data);
    }
    
    public function delete_surat($param){
        $this->db->where('kd_pembebanan',$param);
        return $this->db->delete('tbl_berkas');
    }

    public function list_user($id=null,$args=null){
        $this->db->select('a.*,(select unit_name from unit where unit_id=a.unit_id) as unit_name,(select group_name from tusergroup where autono=a.role_id) as role_name');
        $this->db->from('users a');
        if(!empty($id)){ $this->db->where('user_id',$id); }
        if(!empty($args) && is_array($args)){ $this->db->where_in('user_id',$args); }
        $this->db->order_by('user_id', 'ASC');
        return $this->db->get();
    }

     function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    public function deleteData($table,$data)
    {
        $this->db->delete($table, $data);
    }
      public function edit_surat2($param,$data){
        $this->db->where('id_srt1',$param);
        return $this->db->update('tbl_status1',$data);
    }

    function updatedata($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }


}