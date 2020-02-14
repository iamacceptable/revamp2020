<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function index()
	{
		$data['header'] = 'Home';
		$data['navbar'] = 'revamp';
		$this->load->view('homepage/index',$data);
	}
}
