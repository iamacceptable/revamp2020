<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventModel extends CI_Model {
	public function fetch_event_details($eid){
		//$result = $this->db->select('events.*,event_category.event_name, event_sub_category.cat_name,event_coordinators.name as cname, event_coordinators.branch as cbranch, event_coordinators.year as year, event_coordinators.id as cid, event_coordinators.phone as cphone')
		$result = $this->db->select('events.*,event_category.event_name, event_sub_category.cat_name,event_coordinators.name as cname, event_coordinators.branch as cbranch, event_coordinators.year as year, event_coordinators.id as cid, event_coordinators.phone as cphone, event_faculty.name as fname, event_faculty.phone as fphone')
				 ->from('events')
				 ->join('event_category','events.ec=event_category.event_id')
				 ->join('event_sub_category','events.esc=event_sub_category.cat_id')
				 ->join('event_coordinators','events.id=event_coordinators.eid')
				 ->join('event_faculty','events.id=event_faculty.eid')
				 ->where('events.id',$eid)->get();
		return $result->row();
	}
	public function checkTlRegistration($eid, $pid){
		$result = $this->db->select('*')->from('team_reg')->where('pid',$pid)->where('eid',$eid)->get();
		if($result->num_rows() == 1){
			return TRUE;
		}
		else
			return FALSE;
	}
	public function registerTl($dataPost){
		$this->db->insert('team_reg',$dataPost);
		return $this->db->insert_id();
	}
	public function registerT($dataPost){
		$this->db->insert('participation', $dataPost);
	}
	public function fetch_team($teamId){
		$result = $this->db->select('participants.p_id,participants.id as pid,team_reg.pid as fgg, participants.name, participation.*')->from('participation')->join('participants','participation.pid=participants.id')->join('team_reg','participation.tid=team_reg.tid')->where('participation.tid', $teamId)->get();
		return $result->result_array();
	}
	public function fetch_team_count($teamId){
		$result = $this->db->select('participants.p_id,participants.id as pid, participants.name, participation.*')->from('participation')->join('participants','participation.pid=participants.id')->where('tid', $teamId)->get();
		return $result->num_rows();
	}
	public function fetch_team_id($pid, $eid){
		$result = $this->db->select('*')->from('participation')->where('pid',$pid)->where('eid',$eid)->get();
		return $result->row();
	}
	public function checkAlreadyInTeam($eid, $pid){
		$result = $this->db->select('*')->from('participation')->where('pid',$pid)->where('eid',$eid)->get();
		if($result->num_rows == 1){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	public function getUserId($uid){
		$result = $this->db->select('id')->from('participants')->where('p_id',$uid)->get();
		if($result->num_rows() == 1){
			return $result->row();
		}
		else{
			return FALSE;
		}
	}
	public function deleteMember($id){
		$this->db->where('id',$id);
		$this->db->delete('participation');
	}
}
