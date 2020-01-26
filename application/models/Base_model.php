<?php
class Base_model extends CI_Model {
	public function __construct() {
		parent::__construct();		
	}
	/*public function odbc_con(){
		$connection = odbc_connect("m_absensi","admin","");	
		return $connection;
	}*/
	public function setMessage($param,$message){
		$mg = '';
		if($param){
			$mg .= '<div class="alert alert-success">';
			$mg .= $message;
			$mg .= '</div>';
		}else{
			$mg .= '<div class="alert alert-danger">';
			$mg .= $message;
			$mg .= '</div>';
		}
		return $_SESSION['pesan'] = $mg;
	}
	public function getMessage(){
		if(isset($_SESSION['pesan'])){
			echo $_SESSION['pesan'];
			$_SESSION['pesan']='';
		}
	}	
  
		public function rnamef($s) {
			$acak  = date("Ymd");
			$acak2  = rand(00,99);
			$c = array (' ');
			$d = array ('-','/','\\',',','#',':',';','\'','"','[',']','{','}',')','(','|','~','!','@','%','$','^','&','*','=','?','+');
		
			$s = str_replace('\'', '`', $s);
			$s = str_replace($d, '', $s);  // Hilangkan karakter yang telah disebutkan di array $d
			
			$s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
			return $acak.'_'.$acak2.$s;
		}
	public function selunit(){
		$this->db->select('*');
		$this->db->from('unit');
		$this->db->where('unit_id!=',0);
		$this->db->order_by('unit_id','ASC');
		$res = $this->db->get();
		$sel[0] = '-unit-';
		foreach($res->result() as $r){
			$sel[$r->unit_id] = ''.$r->unit_name.'';
			$this->db->select('*');
			$this->db->from('unit');
			$this->db->where('unit_parent',$r->unit_id);
			$res = $this->db->get();
			foreach($res->result() as $r){
				$sel[$r->unit_id] = ' - '.$r->unit_name;
			}
		}
		return $sel;
	}
	public function selrole(){
		$this->db->select('*');
		$this->db->from('tusergroup');
		$res = $this->db->get();
		$sel[0] = '---';
		foreach($res->result() as $r){
			$sel[$r->autono] = $r->group_name;
		}
		return $sel;
	}

	public function kel(){
		$sel['1'] = 'Lengkap';
		$sel['2'] = 'Kurang';
		return $sel;
	}
	public function kel1(){
		$sel['99'] = 'Lengkap';
		$sel['2'] = 'Kurang';
		return $sel;
	}

		public function jk(){
		$sel[0] = '---';
		$sel['Laki-Laki'] = 'Laki-laki';
		$sel['Perempuan'] = 'Perempuan';
		return $sel;
	}
	public function primaryMenu(){
			$CI =& get_instance();
         	$CI->load->model('system_model');
			$role = $this->session->role;
			$sup = $CI->system_model->list_usermenu($role,'','1');
			if($sup->num_rows()>0){
				foreach($sup->result() as $ba){
					$args[] = $ba->menu_id;	
				}
			}elseif($role==1 || $role==2){
				$args=0;	
			}else{
				$args[] = 0;	
			}
					$mnu = $CI->system_model->list_menus('','y','Y',$args);
					foreach($mnu->result() as $m){
						$mnuchild = $CI->system_model->list_menus('',$m->menu_id,'Y',$args);
						$cls='';
						$child = '';
						$arrow = '';
						$lnk = base_url($m->menu_link);	
						if($mnuchild->num_rows() > 0){
							$cls = ' class="nav side-menu"';
							$arrow = '<span class="arrow"></span>';
							$child = '<ul class="nav child_menu">';
							$lnk = 'javascript:;';
							foreach($mnuchild->result() as $mchild){
								$child .=  '<li><a href="'.base_url($mchild->menu_link).'">'.$mchild->menu_name.'</a></li>';
							}
							$child .= '</ul>';
						}
						echo'
						<li  class="nav-item">
						  <a href="'.$lnk.'" '.$cls.'><i class="'.$m->menu_icon.'"></i> <span>'.$m->menu_name.'</span>
							'.$arrow.'
						  </a>';
						echo $child;
						echo '
						</li>';
					}
		}

		
	public function seljk($val=null){
		$jk = array('L'=>'Laki-laki','P'=>'Perempuan');
		$result = '<select name="gender" class="form-control">';
		foreach($jk as $i=>$v){
			if($val==$i){
				$result .= '<option value="'.$i.'" selected>'.$v.'</option>';
			}else{
				$result .= '<option value="'.$i.'">'.$v.'</option>';
			}
		}	
		$result .='</select>';
		return $result;
	}
	
	
	public function selstatus($val=null){
		$st = array('1'=>'Peserta','3'=>'Istri/Suami','4'=>'Anak');
		$result = '<select name="status" class="form-control">';
		foreach($st as $i=>$v){
			if($val==$i){
				$result .= '<option value="'.$i.'" selected>'.$v.'</option>';
			}else{
				$result .= '<option value="'.$i.'">'.$v.'</option>';
			}
		}	
		$result .='</select>';
		return $result;
	}
	public function seltipem($val=null){
		$jk = array('masuk','tidak');
		$result = '';
		foreach($jk as $v){
			if($val==$v){
				$result .= '<option value="'.$v.'" selected>'.ucfirst($v).'</option>';
			}else{
				$result .= '<option value="'.$v.'">'.ucfirst($v).'</option>';
			}
		}	
		return $result;
	}
	public function mt($val=null){
		$jk = array('Laki-Laki','Perempuan');
		$result = '';
		foreach($jk as $v){
			if($val==$v){
				$result .= '<option value="'.$v.'" selected>'.ucfirst($v).'</option>';
			}else{
				$result .= '<option value="'.$v.'">'.ucfirst($v).'</option>';
			}
		}	
		return $result;
	}
	
		public function unitparent($sl){
			$this->db->select('*');
			$this->db->from('unit');
			$this->db->where('unit_parent',0);
			$res = $this->db->get();
			$sel = '<option value="0" selected>No Parent</option>';
			foreach($res->result() as $r){
				if($sl==$r->unit_id){
					$sel .= '<option value="'.$r->unit_id.'" selected>'.$r->unit_name.'</option>';
				}else{
					$sel .= '<option value="'.$r->unit_id.'">'.$r->unit_name.'</option>';
				}
			}
			return $sel;
		}
		public function selpeg($sl=null){
			$this->db->select('*');
			$this->db->from('kelas1');
			//$this->db->where('nrp_nip_pegawai!=',0);
			$this->db->order_by('esl,nama ASC');
			$res = $this->db->get();
			$sel = '<option value="0" selected>---Siswa Kelas 1---</option>';
			foreach($res->result() as $r){
				if($sl==$r->userid){
					$sel .= '<option value="'.$r->userid.'" selected>'.$r->nama.' ('.$r->nrp_nip_pegawai.')</option>';
				}else{
					$sel .= '<option value="'.$r->userid.'">'.$r->nama.' ('.$r->nrp_nip_pegawai.')</option>';
				}
			}
			return $sel;
		}
			public function selpeg1($sl=null){
			$this->db->select('*');
			$this->db->from('kelas2');
			//$this->db->where('nrp_nip_pegawai!=',0);
			$this->db->order_by('esl,nama ASC');
			$res = $this->db->get();
			$sel = '<option value="0" selected>---Siswa Kelas 2---</option>';
			foreach($res->result() as $r){
				if($sl==$r->userid){
					$sel .= '<option value="'.$r->userid.'" selected>'.$r->nama.' ('.$r->nrp_nip_pegawai.')</option>';
				}else{
					$sel .= '<option value="'.$r->userid.'">'.$r->nama.' ('.$r->nrp_nip_pegawai.')</option>';
				}
			}
			return $sel;
		}
		public function selpeg2($sl=null){
			$this->db->select('*');
			$this->db->from('kelas3');
			//$this->db->where('nrp_nip_pegawai!=',0);
			$this->db->order_by('esl,nama ASC');
			$res = $this->db->get();
			$sel = '<option value="0" selected>---Siswa Kelas 3---</option>';
			foreach($res->result() as $r){
				if($sl==$r->userid){
					$sel .= '<option value="'.$r->userid.'" selected>'.$r->nama.' ('.$r->nrp_nip_pegawai.')</option>';
				}else{
					$sel .= '<option value="'.$r->userid.'">'.$r->nama.' ('.$r->nrp_nip_pegawai.')</option>';
				}
			}
			return $sel;
		}
	public function getGender($val) {
		$jk = array('L'=>'Laki-laki','P'=>'Perempuan');
		return $jk[$val];	
	}
	
	public function getNmbulan($val=null) {
		$bln = array('','Janauri','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		return $bln[$val];	
	}
		public function changeDate($tgl,$tipe=1,$nojam=null){
			if($tipe==1){
				$str2 = explode('-',$tgl);
				$jam='';
			}elseif($tipe==2){
				$str = explode(' ',$tgl);
				$str2 = explode('-',$str[0]);
				if($nojam==null){
					$jam = $str[1];
				}else{
					$jam='';	
				}
			}
			$tanggal = $str2[2].' ';
			switch($str2[1]){
				default: 
					$tanggal .= 'error'; 
				break;
				case "01":
					$tanggal .= 'January ';
				break;
				case "02":
					$tanggal .= 'February ';
				break;
				case "03":
					$tanggal .= 'March ';
				break;
				case "04":
					$tanggal .= 'April ';
				break;
				case "05":
					$tanggal .= 'May ';
				break;
				case "06":
					$tanggal .= 'June ';
				break;
				case "07":
					$tanggal .= 'July ';
				break;
				case "08":
					$tanggal .= 'August ';
				break;
				case "09":
					$tanggal .= 'September ';
				break;
				case "10":
					$tanggal .= 'October ';
				break;
				case "11":
					$tanggal .= 'November ';
				break;
				case "12":
					$tanggal .= 'December ';
				break;
			}
			$tanggal .= $str2[0].'';
			return $tanggal.' '.$jam;
		}
	
	public function seltahun($val=null,$start=2013){
		$res ='<select name="tahun" class="form-control col-md-3">
		                   <option value="">All</option>';
		for($i=date('Y');$i>=$start;$i--){
			if($i==$val){
				$res .= '<option selected>' .$i.'</option>';
			}else{
				$res .= '<option>' .$i.'</option>';
			}
		
		}
		$res .= '</select>';
		return $res;
		
	}
	
	public function seltgl($val=null,$start=1){
		$res ='<select name="tanggal" class="form-control col-md-3">
		                   <option value="">All</option>';
		for($i=1;$i<=31;$i++){
			if($i==$val){
				$res .= '<option selected>' .$i.'</option>';
			}else{
				$res .= '<option>' .$i.'</option>';
			}
		
		}
		$res .= '</select>';
		return $res;
		
	}
	
	
	public function selbulan($val=null){
		$bln = array('','Janauri','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$res ='<select name="bulan" class="form-control col-md-3">';
		                   
		foreach($bln as $i=>$v){
			if($i==$val){
				$res .= '<option value="' .$i.'" selected>' .$v.' </option>';
				//$res .= '<option selected>' .$i.'</option>';
			}else{
				$res .= '<option value="' .$i.'">' .$v.'</option>';
			}
		
		}
		$res .= '</select>';
		return $res;
		
	}
	
		public function yorn($oto=null,$nm='yn'){
			if($oto=='Y'){	
				$sel = "<input type='radio' name='$nm' value='Y' checked> Y | <input type='radio' name='$nm' value='N' > N";
			}else{
				$sel = "<input type='radio' name='$nm' value='Y'> Y | <input type='radio' name='$nm' value='N'  checked> N";
			}
			return $sel;	
		}
		public function menuparent($sl){
			$this->db->select('*');
			$this->db->from('menus');
			$this->db->where('menu_parent_id',0);
			$res = $this->db->get();
			$sel = '<option value="0">No Parent</option>';
			foreach($res->result() as $r){
				if($sl==$r->menu_id){
					$sel .= '<option value="'.$r->menu_id.'" selected>'.$r->menu_name.'</option>';
				}else{
					$sel .= '<option value="'.$r->menu_id.'">'.$r->menu_name.'</option>';
				}
			}
			return $sel;
		}
	
		function gettglindo($val=null){
			list($thn,$bln,$tgl) = explode('-',$val);
			return $tgl.'/'.$bln.'/'.$thn;	
		}
		
	public function getConv($val){
		$j = $val/3600;
		$m = ($val % 3600)/60;
		$d = ($val % 3600)%60;
		return floor($j).':'.floor($m).':'.floor($d);
	}
	//end transaksi
	
}