<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function index()
	{

		$this->load->library('form_validation');
		$data['header'] = 'Registration';
		$data['navbar'] = 'registration';
		$this->load->view('registration',$data);
	}
	public function register(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('rollNo','Roll Number','callback_check_rollno|required|numeric');
		$this->form_validation->set_rules('fName','Father\' Name','required');
		$this->form_validation->set_rules('mName','Mother\' Name','required');
		$this->form_validation->set_rules('mNumber','Mobile Number','callback_check_mobile|required|numeric|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('email','Email','callback_check_email|required|valid_email');
		$this->form_validation->set_rules('branch','Branch','required');
		$this->form_validation->set_rules('year','Year','required|numeric|max_length[1]|min_length[1]');
		$this->form_validation->set_rules('aadhar','Aadhar Number','callback_check_aadhar|required|numeric|max_length[12]|min_length[12]');
		$this->form_validation->set_rules('college','College Name','required');
		$this->form_validation->set_rules('university','University Name','required');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}	
		else{
			$name = $this->input->post('name');
			$rollNo = $this->input->post('rollNo');
			$fName = $this->input->post('fName');
			$mName = $this->input->post('mName');
			$mNumber = $this->input->post('mNumber');
			$email = $this->input->post('email');
			$branch = $this->input->post('branch');
			$year = $this->input->post('year');
			$aadhar = $this->input->post('aadhar');
			$college = $this->input->post('college');
			$university = $this->input->post('university');
			$password = md5($this->input->post('rollNo'));
			if($college == 'Krishna Engineering College')
				$intra = '1';
			else
				$intra = '0';
			$dataPost = array(
					'name' => $name,
					'roll_no' => $rollNo,
					'f_name' => $fName,
					'm_name' => $mName,
					'mobile' => $mNumber,
					'email' => $email,
					'branch' => $branch,
					'year' => $year,
					'aadhar' => $aadhar,
					'college' => $college,
					'university' => $university,
					'password' => $password,
					'intra' => $intra
			);
			$this->load->model('RegistrationModel');
			$pId = $this->RegistrationModel->register_new_participant($dataPost);
			$pUiD = 'KECRMPINT'.($mNumber%1000).$pId;
			// echo '<pre>';
			// print_r($pUiD);
			$this->RegistrationModel->update_puid($pId, $pUiD);
			//$this->sendEmail($pUiD, $rollNo, $email);
			redirect('Homepage/index');
		}
	}
	public function check_mobile($str){
		$this->load->model('RegistrationModel');
		if($this->RegistrationModel->check_mobile($str))
			return TRUE;
		else{
			$this->form_validation->set_message('check_mobile','The Mobile Number already Exists!!');
			return FALSE;
		}
	}
	public function uncheck_mobile($str){
		$this->load->model('RegistrationModel');
		if($this->RegistrationModel->check_mobile($str)){
			$this->form_validation->set_message('uncheck_mobile','The Mobile Number doesn\'t exists!!');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	public function check_email($str){
		$this->load->model('RegistrationModel');
		if($this->RegistrationModel->check_email($str))
			return TRUE;
		else{
			$this->form_validation->set_message('check_email','The Email Address already Exists!!');
			return FALSE;
		}
	}
	public function check_rollno($str){
		$this->load->model('RegistrationModel');
		if($this->RegistrationModel->check_rollno($str))
			return TRUE;
		else{
			$this->form_validation->set_message('check_rollno','The Roll Number already Exists!!');
			return FALSE;
		}
	}
	public function check_aadhar($str){
		$this->load->model('RegistrationModel');
		if($this->RegistrationModel->check_aadhar($str))
			return TRUE;
		else{
			$this->form_validation->set_message('check_aadhar','The Aadhar Number already Exists!!');
			return FALSE;
		}
	}
	public function sendEmail($pUiD, $rollNo, $email){
		$this->load->library('email');
        $this->email->from('regal@krishnacollege.ac.in', 'Identification');
        $this->email->to($email);
        $this->email->subject('Thanks for participating in KEC Annual Fest 2020 | Ceredentials');
        $this->email->message('Hey! your unique participation id is '.$pUiD.'. Thanks for your participation, you can authenticate through your registered mobile number and '.$rollNo.' as your default password.');
        $this->email->send();
	}
	public function authenticate(){
		$this->load->library('form_validation');
		$data['header'] = 'Auhtentication';
		$data['navbar'] = 'authenticate';
		$this->load->view('login',$data);
	}
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mobile','Mobile Number','callback_uncheck_mobile|required|numeric|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			$this->authenticate();
		}
		else{
			$data['mobile'] = $this->input->post('mobile');
			$data['password'] = md5($this->input->post('password'));
			$this->load->model('RegistrationModel');
			$returnData = $this->RegistrationModel->check_ceredentials($data);
			if($returnData != FALSE){
				$sessData = array(
					'id' => $returnData->id,  
					'puid' => $returnData->p_id,
					'name' => $returnData->name,
					'active' => 'true'
				);
				$this->session->set_userdata($sessData);
				redirect('Homepage');
			}
			else{
				$this->load->library('form_validation');
				$data['header'] = 'Auhtentication';
				$data['navbar'] = 'authenticate';
				$data['error'] = 'Incorrect Password!!!';
				$this->load->view('login',$data);
			}
		}
	}
	public function logout(){
		$array_items = array('id', 'puid', 'name', 'active');
		$this->session->unset_userdata($array_items);
		redirect('Homepage');
	}
}
