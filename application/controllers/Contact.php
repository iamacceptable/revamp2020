<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data['header'] = 'Contact Us';
		$data['navbar'] = '';
		$this->load->view('contact/index',$data);
	}
	public function developers()
	{
		$data['header'] = 'Meet Developers';
		$data['navbar'] = '';
		$this->load->view('contact/developers',$data);
	}
}
