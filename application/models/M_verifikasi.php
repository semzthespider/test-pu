<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_verifikasi extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
   public function list_unit($kd_pembebanan=null){
        $this->db->select('*');
        $this->db->from('tbl_berkas ');
        $this->db->join('tbl_status1','tbl_status1.kd_pembebanan=tbl_berkas.kd_pembebanan');
        $this->db->join('tbl_kendali','tbl_kendali.kd_pembebanan=tbl_berkas.kd_pembebanan');
        $this->db->where('id_penerima',1);
        return $this->db->get();
    }

       public function list_unit1($kd_pembebanan=null,$par=null,$args=null){
        $this->db->select('a.*');
        $this->db->from('tbl_berkas a');
        if(!empty($kd_pembebanan)){ $this->db->where('kd_pembebanan',$kd_pembebanan); }
        $this->db->where('idh2',2);
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
     function updatedata2($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

    
    function geteditdata($kd_pembebanan)
    {
        return $this->db->query("SELECT a.kd_pembebanan, a.untuk_pembayaran, a.subdit, a.tggl, a.id_penerima, a.id_status, a.jenisanggaran, a.id_kelengkapan, a.catatan, a.idh1, a.idh1, b.kd_pembebanan, b.ps1, b.ps2, b.ps3, b.ps4, b.ps5, b.ps6, b.ps7, b.ps8, b.ps9, b.ps10, b.ps11, b.ps12, b.ps13, b.ps14, b.ps15, b.ps16, b.ps17, b.ps18, b.ps19, b.ps20, b.ps21, b.ps22, b.ps23, b.ps24, b.ps25, b.ps26 FROM tbl_berkas a left join tbl_status1 b on a.kd_pembebanan=b.kd_pembebanan where a.kd_pembebanan='".$kd_pembebanan."'");    
    }


}