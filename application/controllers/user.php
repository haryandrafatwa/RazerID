<?php
class user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_product');
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
			$data_session = array(
				'email' => $this->input->post('email'),
				'status' => true,
			);
			$this->session->set_userdata($data_session);
			redirect('Home');
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
			redirect("Home");
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
	
	public function add_product(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			$data['product']=$this->M_product->getProduct($email);
			$data['judul'] = 'Razer ID - Produk';
			$this->load->view('templates/header_produk',$data);
			$this->load->view('pages/tambah_produk',$data);
			$this->load->view('templates/footer_update');
			
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
	
	public function hapusAkun(){
		$email = $this->session->userdata('email');
		$pass=base64_encode($this->input->post('pass'));
		$result = $this->M_user->selectAkun($email,$pass);
		if($result > 0){
			$this->M_user->hapusAkunUs($email);
			$this->M_user->hapusAkunAl($email);
			$this->M_user->hapusAkunTr($email);
			$this->logout2();
		} else{
			$this->session->set_flashdata('gagal','Tindakan gagal diproses.');
			redirect(site_url('user/hapus_akun'));
		}
		
	}
	
	public function hapus_akun(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Hapus Akun';
			$this->load->view('templates/header_razerid',$data);
			$this->load->view('pages/hapus_akun');
			$this->load->view('templates/footer_update');
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	
	public function addNew_product(){
		if ($this->session->userdata('status')== true) {
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['judul'] = 'Razer ID - Produk';
			$this->load->view('templates/header_produk',$data);
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
			$this->load->view('templates/header_produk',$data);
			$this->load->view('pages/add_product2',$data1);
			$this->load->view('templates/footer_update');
			$this->session->set_flashdata('var',$data1);
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function addNew3_product($data1){
		if ($this->session->userdata('status')== true) {
			$this->session->set_flashdata('berhasil', 'Produk Telah Terdaftar.');
			$email = $this->session->userdata('email');
			$result = $this->M_user->getUser($email);
			$data['user'] = $result;
			
			$data['data'] = $this->M_product->getAll($data1);
			$data['judul'] = 'Razer ID - Produk';
			$this->load->view('templates/header_produk',$data);
			$this->load->view('pages/add_product3',$data);
			$this->load->view('templates/footer_update');
			
			
		}else{
			redirect(site_url('home'));
		}
	}
	
	public function add1(){
		$data['judul'] = 'Razer ID - Produk';
		$email = $this->session->userdata('email');
		$data = [
			"serial_number" => $this->input->post('sn', true),
			"transaction_date" =>$this->input->post('tp',true),
			"location" => $this->input->post('cn',true),
			"email" => $email
		];
		$hasil = $this->M_product->cek1($data);
		if($hasil > 0){
			$this->session->set_flashdata('gagal','Serial number ini telah digunakan.');
			redirect('user/addNew_product');
		}else{
			$this->addNew2_product($data);
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
		
		$data['judul'] = 'Razer ID - Produk';
		$email = $this->session->userdata('email');
		$arremail = array(
			"email" => $email
		);
		$address = array_merge($data1,$arremail);

		$this->M_product->addAlamat($address);
		$alm = $this->M_product->getAlamatByEmail($email,$data1['address']);
		$data3 = array(
			"email" => $email,
			"serial_number" =>$this->input->post('sn',true),
			"address" =>$alm['id_alamat'],
			"transaction_date" =>$this->input->post('td',true),
			"location" =>$this->input->post('lc',true),
		);
		$this->M_product->add($data3);
		$this->addNew3_product($address);
	}
	
}
