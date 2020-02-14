<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationModel extends CI_Model {
	public function register_new_participant($data){
		$this->db->insert('participants', $data);
		return $this->db->insert_id();
	}
	public function update_puid($id, $puid){
		$this->db->set('p_id',$puid);
		$this->db->where('id',$id);
		$this->db->update('participants');
		return;
	}
	public function check_mobile($mobile){
		$this->db->select('p_id');
		$this->db->from('participants');
		$this->db->where('mobile', $mobile);
		$result = $this->db->get();
		if($result->num_rows() == 1)
			return FAlSE;
		else
			return TRUE;
	}
	public function check_email($email){
		$this->db->select('p_id');
		$this->db->from('participants');
		$this->db->where('email', $email);
		$result = $this->db->get();
		if($result->num_rows() == 1)
			return FAlSE;
		else
			return TRUE;
	}
	public function check_rollno($rollNo){
		$this->db->select('p_id');
		$this->db->from('participants');
		$this->db->where('roll_no', $rollNo);
		$result = $this->db->get();
		if($result->num_rows() == 1)
			return FAlSE;
		else
			return TRUE;
	}
	public function check_aadhar($aadhar){
		$this->db->select('p_id');
		$this->db->from('participants');
		$this->db->where('aadhar', $aadhar);
		$result = $this->db->get();
		if($result->num_rows() == 1)
			return FAlSE;
		else
			return TRUE;
	}
	public function check_ceredentials($dataPost){
		$result = $this->db->select('id, p_id, name')
					->from('participants')
					->where('mobile',$dataPost['mobile'])
					->where('password', $dataPost['password'])
					->get();
		if($result->num_rows() == 1){
			return $result->row();
		}
		else{
			return FALSE;
		}
	}
}
