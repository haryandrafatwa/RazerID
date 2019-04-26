<?php
class user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_product');
	}
	
	public function add1(){
		$data['judul'] = 'Razer ID - Produk';
		
		$this->form_validation->set_rules('sn', 'Serial Number', 'required');
		$this->form_validation->set_rules('np', 'Product Number', 'required');
        $this->form_validation->set_rules('tp', 'Transaction Date', 'required');
        $this->form_validation->set_rules('cn', 'Country', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			return $this->load->view('pages/add_product',$data);
		}
		else
		{
			$email = $this->session->userdata('email');
			$data = [
				"serial_number" => $this->input->post('sn', true),
				"product_number" => $this->input->post('np', true),
				"transaction_date" =>$this->input->post('tp',true),
				"country_name" => $this->input->post('cn',true),
				"email" => $email
			];
			$hasil = $this->M_product->cek1($data);
			if($hasil=0){
				$this->M_product->add($data);
				$this->addNew2_product($data);
			}else{
				$this->session->set_flashdata('gagal','Serial number ini telah digunakan.');
				redirect('user/addNew_product');
			}
			
		}
	}
	
	
	
	public function add2(){
		$data1 = array(
			"first_name" => $this->input->post('first_name',true),
			"last_name" => $this->input->post('last_name',true),
			"address" => $this->input->post('address',true),
			"apart" => $this->input->post('apart',true),
			"city" => $this->input->post('city',true),
			"status" => $this->input->post('status',true),
			"zip" => $this->input->post('zip',true),
			"location" => $this->input->post('location',true),
		);
		
		$data['judul'] = 'Razer ID - Produk';/*
		$hasil = $this->M_product->cekAlamat($data,$data1);
		if($hasil=0){*/
			$email = $this->session->userdata('email');
			$address = array_merge($data1,$email);
			$this->M_product->addAlamat($address);
			$this->M_product->cekAlamat($data1,$email);
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/add_product3',$address);
			$this->load->view('templates/footer_update');
			/*redirect('product/addNew3_product');*/
		/*}*/
	}
	
	
	public function addNew_product(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Produk';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/add_product',$data);
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function addNew2_product($data1){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Produk';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/add_product2',$data);
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function addNew3_product(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['data'] = $this->M_product->getAll($data1);
			$data['judul'] = 'Razer ID - Produk';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/add_product3',$data);
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
}
