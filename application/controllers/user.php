<?php
class user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function daftar()
	{
		$data['judul'] = 'Razer ID - Buat Akun';
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('razerid', 'RazerId', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			return $this->load->view('pages/daftar',$data);
		}
		else
		{
			$this->M_user->daftar();
			redirect('home/landing');
		}
	}
	
	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$encode= base64_encode($password);
		$where = array('email =' => $email, 'password =' => $encode);
		$query = $this->db->query('SELECT * FROM user where email = "'.$email.'" and password = "'.$encode.'"');
		$cek = $query->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'email' => $email,
				'status' => true,
			);
			$this->session->set_userdata($data_session);
			redirect("Home/landing");
		}else{
			redirect("home/login");
		}
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(home);
	}
	
	public function logout2(){
		$this->session->sess_destroy();
		redirect('home/login');
	}
	
	public function account(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Akun';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/akun_razerid',$data);
			$this->load->view('templates/footer_razerid');
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function edit_razerid(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Change Razer ID';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/edit_razerid',$data);
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function edit_info(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Edit Profil';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/edit_info',$data);
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function edit_2ndemail(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Email Pemulihan';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/edit_secondemail',$data);
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function edit_email(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Email Pemulihan';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/edit_email',$data);
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function editId(){
		$email = $this->session->userdata('email');
		$razerid=$this->input->post('id');
		$this->M_user->updateId($email,$razerid);
		$this->session->set_flashdata('flash','Tindakan berhasil diproses.');
		redirect(site_url('user/edit_razerid'));
	}
	
	public function editInfo(){
		$email = $this->session->userdata('email');
		$fName=$this->input->post('fName');
		$lName=$this->input->post('lName');
		$gender=$this->input->post('gender');
		$this->M_user->updateInfo($email,$fName,$lName,$gender);
		$this->session->set_flashdata('flash','Tindakan berhasil diproses.');
		redirect(site_url('user/edit_info'));
	}
	
	public function edit2ndemail(){
		$email = $this->session->userdata('email');
		$scdemail=$this->input->post('secondemail');
		$this->M_user->update2ndemail($email,$scdemail);
		$this->session->set_flashdata('flash','Tindakan berhasil diproses.');
		redirect(site_url('user/edit_2ndemail'));
	}
	
	public function editemail(){
		$email = $this->session->userdata('email');
		$newEmail=$this->input->post('newEmail');
		$this->M_user->updateEmail($email,$newEmail);
		$this->session->set_flashdata('flash','Tindakan berhasil diproses.');
		$data_session = array(
				'email' => $newEmail,
				'status' => true,
		);
		$this->session->set_userdata($data_session);
		redirect(site_url('user/edit_email'));
	}
}
