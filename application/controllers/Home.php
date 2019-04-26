<?php

class Home extends CI_Controller{
	public function index(){
		if ($this->session->userdata('status')!= true) {
			$data['judul'] = 'Razer United States | For Gamers. By Gamers.';
			$this->load->view('templates/header', $data);
			$this->load->view('pages/index');
			$this->load->view('templates/footer');
		}else{
			$data['judul'] = 'Razer United States | For Gamers. By Gamers.';
			$this->load->view('templates/header_login', $data);
			$this->load->view('pages/index');
			$this->load->view('templates/footer');
		}
	}
	
	public function daftar(){
		$data['judul'] = 'Razer ID - Daftar';
		$this->load->view('pages/daftar',$data);
	}
	
	public function login(){
		$data['judul'] = 'Razer ID - Masuk';
		$this->load->view('pages/login',$data);
	}
	
	public function account(){
		if ($this->session->userdata('status')!= true) {
		  redirect(site_url('home'));
		}
		$data['judul'] = 'My Account | Razer United States';
		$this->load->view('templates/header_login', $data);
		$this->load->view('pages/akun');
		$this->load->view('templates/footer');
	}
	
	public function profile(){
		if ($this->session->userdata('status')!= true) {
		  redirect(site_url('home'));
		}
		$data['judul'] = 'Profile | Razer United States';
		$this->load->view('templates/header_login', $data);
		$this->load->view('pages/profile');
		$this->load->view('templates/footer');
	}
}