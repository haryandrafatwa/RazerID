<?php

class Home extends CI_Controller{
	public function index(){
		$data['judul'] = 'Razer United States | For Gamers. By Gamers.';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

}