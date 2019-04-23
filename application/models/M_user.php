 <?php
 // write your name and student id here
class M_user extends CI_model
{
	function daftar(){
		$data = [
			"id" => $this->input->post('razerid', true),
			"email" => $this->input->post('email', true),
			"password" => base64_encode($this->input->post('pass', true)),
			"gender" => "Manusia",
			"first_name" => "-",
			"mobile_phone" => "-",
			"address" => "-",
			"secondary_email" => "-"
		];
		return $this->db->insert('user', $data);
	}
	
	public function login($table,$where)
	{
		$this->db->where($where);
		return $this->db->get($table);
	}
	
	public function getUser($email){
			$this->db->where('email',$email);
			$result = $this->db->get('user');
			return $result->row_array();
	}
	
	public function updateId($email,$razerid){
		$this->db->where('email',$email);
		$this->db->set('id', $razerid);
		$this->db->update('user');
	}
	
	public function updateInfo($email,$fName,$lName,$gender){
		$this->db->where('email',$email);
		$this->db->set('first_name', $fName);
		$this->db->set('last_name', $lName);
		$this->db->set('gender', $gender);
		$this->db->update('user');
	}
	
	public function update2ndemail($email,$scdemail){
		$this->db->where('email',$email);
		$this->db->set('secondary_email', $scdemail);
		$this->db->update('user');
	}
	public function updateEmail($email,$newEmail){
		$this->db->where('email',$email);
		$this->db->set('email', $newEmail);
		$this->db->update('user');
	}
}
