<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index(){
		
	}
	public function infinito()
	{
		$data['header'] = 'Events | Infinito 2020';
		$data['navbar'] = 'Infinito';
		$this->load->view('events/infinito',$data);
	}
	public function revamp()
	{
		$data['header'] = 'Events | Revamp 2020';
		$data['navbar'] = 'Revamp';
		$this->load->view('events/revamp',$data);
	}
	public function event_details($eId){
		$this->load->model('EventModel');
		$event = $this->EventModel->fetch_event_details($eId);
		$data['header'] = $event->name;
		$data['navbar'] = $event->event_name;
		$data['details'] = $event;
		// echo '<pre>';
		// print_r($event);
		$this->load->view('events/event_details',$data);
	}
	public function participate_tl($eid){
		if(isset($_SESSION['active'])){	
			$teamId = '';
			$this->load->model('EventModel');
			if($this->checkTlAlreadyRegistered($eid, $_SESSION['id']) || $this->EventModel->checkAlreadyInTeam($eid, $_SESSION['id'])){
				$data['perror'] = 'Team Already Registered';
			}
			else{
				$dataPost = array('pid' => $_SESSION['id'], 'eid' => $eid);
				$teamId = $this->EventModel->registerTl($dataPost);
				$dataPost = array('pid' => $_SESSION['id'], 'eid' => $eid, 'tid' => $teamId);
				$this->EventModel->registerT($dataPost);
			}
			$teamId = $this->EventModel->fetch_team_id($_SESSION['id'], $eid);
			$team = $this->EventModel->fetch_team($teamId->tid);
			$teamCount = $this->EventModel->fetch_team_count($teamId->tid);
			$event = $this->EventModel->fetch_event_details($eid);
			$data['details'] = $event;
			$data['teams'] = $team;
			$data['teamCount'] = $teamCount;
			$data['header'] = 'Participate | '.$event->name;
			$data['navbar'] = 'Participate';
			$this->load->view('events/participant',$data);
		}
		else{
			redirect('Registration/authenticate');
		}
	}
	public function checkTlAlreadyRegistered($eid, $pid){
		$this->load->model('EventModel');
		return $this->EventModel->checkTlRegistration($eid, $pid);
	}
	public function participate($eid){
		if(isset($_SESSION['active'])){
			$this->load->model('EventModel');
			$teamId = $this->EventModel->fetch_team_id($_SESSION['id'], $eid);
			// echo '<pre>';
			// print_r($teamId->tid);
			if($getUserId = $this->EventModel->getUserId($this->input->post('puid'))){
				if($this->EventModel->checkAlreadyInTeam($eid, $getUserId->id)){
					$data['error'] = 'Already Registered';
				}
				else{
					$dataPost = array('pid' => $getUserId->id, 'eid' => $eid, 'tid' => $teamId->tid);
					$this->EventModel->registerT($dataPost);
				}
			}
			else{
				$data['error'] = 'Unique Id Not Found!!';
			}
			$team = $this->EventModel->fetch_team($teamId->tid);
			$teamCount = $this->EventModel->fetch_team_count($teamId->tid);
			$event = $this->EventModel->fetch_event_details($eid);
			$data['details'] = $event;
			$data['teams'] = $team;
			$data['teamCount'] = $teamCount;
			$data['header'] = 'Participate | '.$event->name;
			$data['navbar'] = 'Participate';
			$this->load->view('events/participant',$data);
		}
		else{
			redirect('Registration/authenticate');
		}		
	}
	public function deleteMember($ptid,$eid){
		if(isset($_SESSION['active'])){
			$this->load->model('EventModel');
			$this->EventModel->deleteMember($ptid);
			$teamId = $this->EventModel->fetch_team_id($_SESSION['id'], $eid);
			$team = $this->EventModel->fetch_team($teamId->tid);
			$teamCount = $this->EventModel->fetch_team_count($teamId->tid);
			$event = $this->EventModel->fetch_event_details($eid);
			$data['details'] = $event;
			$data['teams'] = $team;
			$data['teamCount'] = $teamCount;
			$data['header'] = 'Participate | '.$event->name;
			$data['navbar'] = 'Participate';
			$this->load->view('events/participant',$data);
		}
		else{
			redirect('Registration/authenticate');
		}
	}
}
