<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Read_Model extends CI_Model{
public function getdata(){
$query=$this->db->select('username,password,emailid,mobilenumber,address,id')
		->get('adminusers');
		 return $query->result();
	}
	
}
?>