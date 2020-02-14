<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorMissing extends CI_Controller {
	public function index()
	{
		$data['header'] = 'Error 404';
		$data['navbar'] = '';
		$this->load->view('not_found',$data);
	}
}