<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');


class M_subdit extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
   public function list_unit($kd_pembebanan=null,$par=null,$args=null){
        $this->db->select('a.*');
        $this->db->from('tbl_berkas a');
        if(!empty($kd_pembebanan)){ $this->db->where('kd_pembebanan',$kd_pembebanan); }
        $this->db->where('id_penerima',99);
        $this->db->order_by('kd_pembebanan', 'ASC');
        return $this->db->get();
    }

		public function list_unit2($kd=null,$par=null,$args=null){
			$this->db->select('a.* (select kepada_alamat from tbl_kendali where kd_pembebanan=a.kd_pembebanan) as kepada_alamat,(select)');
			$this->db->from('tbl_kendali a');
			if(!empty($kd)){ $this->db->where('kd_pembebanan',$kd); }
			$this->db->order_by('unit_id', 'ASC');
			return $this->db->get();
		}
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

       public function list_unit1($kd_pembebanan=null,$par=null,$args=null){
        $this->db->select('a.*');
        $this->db->from('tbl_berkas a');
        if(!empty($kd_pembebanan)){ $this->db->where('kd_pembebanan',$kd_pembebanan); }
        $this->db->where('idh1',1);
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
    function deleteData($table,$data)
    {
        $this->db->delete($table, $data);
    }
    function updatedata($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

      function selesai($kd_pembebanan)
    {
         return $this->db->query("SELECT a.kd_pembebanan, a.untuk_pembayaran, a.subdit, a.tggl, a.id_penerima, a.id_status, a.jenisanggaran, a.id_kelengkapan, a.catatan, a.idh1, a.idh1, b.kd_pembebanan, b.ps1, b.ps2, b.ps3, b.ps4, b.ps5, b.ps6, b.ps7, b.ps8, b.ps9, b.ps10, b.ps11, b.ps12, b.ps13, b.ps14, b.ps15, b.ps16, b.ps17, b.ps18, b.ps19, b.ps20, b.ps21, b.ps22, b.ps23, b.ps24, b.ps25, b.ps26, b.ps27, b.ps28, b.ps29 FROM tbl_berkas a left join tbl_status1 b on a.kd_pembebanan=b.kd_pembebanan where a.kd_pembebanan='".$kd_pembebanan."'");
    }

}
