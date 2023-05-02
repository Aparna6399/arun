<?php
Class Admin_Model extends CI_Model{
public function insertdata($fname,$pswd,$emaild,$mnumber,$adress){
$data=array(
			'username'=>$fname,
			'password'=>$pswd,
			'emailid'=>$emaild,
			'mobilenumber'=>$mnumber,
		    'address'=>$adress
		);
$sql_query=$this->db->insert('adminusers',$data);
if($sql_query){
return true;
}
else{
	return false;
}
}
public function admindata(){
$query=$this->db->select('username,password,emailid,mobilenumber,address,id')
		->get('adminusers');
		 return $query->result();
	}
	public function getuserdetail($uid){
		$ret=$this->db->select('username,password,emailid,mobilenumber,address,id')->where('id',$uid)
		              ->get('adminusers');
		        return $ret->row();
	}

	public function updatedetails($fname,$pswrd,$email,$cntno,$adrss,$usid){
$data=array(
			'username'=>$fname,
			'password'=>$pswrd,
			'emailid'=>$email,
			'mobilenumber'=>$cntno,
			'address'=>$adrss
		);
$sql_query=$this->db->where('id', $usid)
                ->update('adminusers', $data);
           if($sql_query){
               return true;
	}
	else{
		return false;
	}

}
}
?>