<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coordinator extends CI_Controller {
	public function index(){
		
	}
	public function infinito()
	{
		$data['header'] = 'Coordinators | Infinito 2020';
		$data['navbar'] = 'Infinito';
		$this->load->view('coordinator/infinito',$data);
	}
	public function revamp()
	{
		$data['header'] = 'Coordinators | Revamp 2020';
		$data['navbar'] = 'Revamp';
		$this->load->view('coordinator/revamp',$data);
	}
}
