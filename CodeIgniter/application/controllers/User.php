<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Controller{

public function index(){
	$this->load->view('home');
}
public function user(){
	$this->load->model('Admin_Model');
	$data['records']=$this->Admin_Model->getdata();
	$this->load->view('home',$data);
}

}
?>