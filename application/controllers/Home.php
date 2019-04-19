<?php

class Home extends CI_Controller{
	public function index(){
		$data['judul'] = 'Razer United States | For Gamers. By Gamers.';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}
	
	public function login(){
		$data['judul'] = 'Razer ID - Masuk';
		$this->load->view('pages/login',$data);
	}
	
	public function daftar(){
		$data['judul'] = 'Razer ID - Buat Akun';
		$this->load->view('pages/daftar',$data);
	}
	
	public function landing(){
		$data['judul'] = 'Razer United States | For Gamers. By Gamers.';
		$this->load->view('templates/header_login', $data);
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}
	
	public function account(){
		$data['judul'] = 'My Account | Razer United States';
		$this->load->view('templates/header_login', $data);
		$this->load->view('pages/akun');
		$this->load->view('templates/footer');
	}
	
	public function profile(){
		$data['judul'] = 'Profile | Razer United States';
		$this->load->view('templates/header_login', $data);
		$this->load->view('pages/profile');
		$this->load->view('templates/footer');
	}
	
	public function razerid_account(){
		$data['judul'] = 'Razer ID - Akun';
		$this->load->view('templates/header_razerid',$data);
		$this->load->view('pages/akun_razerid');
		$this->load->view('templates/footer_razerid');
	}

}