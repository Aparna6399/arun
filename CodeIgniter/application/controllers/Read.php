<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Read extends CI_Controller{

public function index(){
	$this->load->view('read');
}
public function Readcrud(){
	$this->load->model('Read_Model');
	$data['records']=$this->Read_Model->getdata();
	$this->load->view('read',$data);
}
}
?>