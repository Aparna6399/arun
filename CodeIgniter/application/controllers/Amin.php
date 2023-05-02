<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Amin extends CI_Controller{
	public function index()
	{
		$this->load->view('home');
	}
public function register()
	{
		$this->load->view('register');
	}
  

public function admin(){
//library form validation . you can also load this libray in application/autoload.php
	$this->load->database();
	$this->load->library('session');

$this->load->library('form_validation');
$this->form_validation->set_rules('username','User Name','required');
$this->form_validation->set_rules('mobnumber','Mobile Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('address','Address','required');
if($this->form_validation->run()){
$fname=$this->input->post('username');
$pswd=$this->input->post('password');
$emaild=$this->input->post('emailid');
$mnumber=$this->input->post('mobnumber');
//$gender=$this->input->post('gender');
$adress=$this->input->post('address');
//$tc=$this->input->post('TermsCondition');
$this->load->model('Admin_Model');
$regis=$this->Admin_Model->insertdata($fname,$pswd,$emaild,$mnumber,$adress);
if($regis){
$this->session->set_flashdata('success', 'Registration successful');
$this->load->view("register");
//redirect('Registration/registration');

}
else{
$this->session->set_flashdata('error', 'Somthing went wrong. Error!!');
$this->load->view("register");
//redirect('Registration/registration');
}
}
else{
$this->load->view("register");
}
}
public function user(){
	$this->load->database();
	$this->load->model('Admin_Model');
	$data['records']=$this->Admin_Model->admindata();
	$this->load->view('home',$data);
}
public function getdetails($uid)
{
	$this->load->database();
//loading model
$this->load->model('Admin_Model');
$reslt=$this->Admin_Model->getuserdetail($uid);
// Passing Values to update view
$this->load->view('update',['row'=>$reslt]);
}
public function updatedetails(){
$this->form_validation->set_rules('username','User Name','required|alpha');
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('mobnumber','Mobile Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('address','Address','required');
if($this->form_validation->run()){
$fname=$this->input->post('username');
$pswrd=$this->input->post('password');
$email=$this->input->post('emailid');
$cntno=$this->input->post('mobnumber');
$adrss=$this->input->post('address');
$usid=$this->input->post('userid');
$this->load->model('Admin_Model');
$updte=$this->Admin_Model->updatedetails($fname,$pswrd,$email,$cntno,$adrss,$usid);
if($updte){
$this->session->set_flashdata('success', 'Record updated successful');
		$this->load->view("home");
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		$this->load->view("home");
	}
} else {
$this->session->set_flashdata('error', 'Somthing went worng. Try again with valid details !!');
		$this->load->view("home");
}
}
}


?>