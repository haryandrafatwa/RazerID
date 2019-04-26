 <?php
 // write your name and student id here
class M_product extends CI_model
{
	function add($data){
		return $this->db->insert('transaction', $data);
	}
	
	function addAlamat($data){
		return $this->db->insert('alamat', $data);
	}
	
	function cek1($data){
		$this->db->where('email',$data['email']);
		$this->db->where('serial_number',$data['serial_number']);
		return $this->db->get('transaction')->num_rows();
	}
	
	function getAlamatByEmail($email,$address){
		$this->db->where('email',$email);
		$this->db->where('address',$address);
		return $this->db->get('alamat')->row_array();
	}
	
	function cekAlamat($email,$data2){
		$this->db->where('email',$email);
		$this->db->where('address',$data2['address']);
		$this->db->where('apart',$data2['apart']);
		$this->db->where('city',$data2['city']);
		$this->db->where('status',$data2['status']);
		$this->db->where('zip',$data2['zip']);
		$this->db->where('location',$data2['location']);
		$hasil = $this->db->get('alamat')->num_rows();
		if($hasil > 0){
			return $this->setIdAlamat($hasil['id']);
		} else{
			return null;
		}
	}
	
	function setIdAlamat($id){
		$this->db->set('address',$id);
		$this->db->update('transaction');
	}
	
	function getAll($data){
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->join('product', 'product.serial_number = transaction.serial_number');
		$this->db->join('alamat', 'alamat.id_alamat = transaction.address');
		$this->db->where('transaction.email', $data['email']);
		$this->db->where('alamat.address', $data['address']);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	function getProduct($email){
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->join('product', 'product.serial_number = transaction.serial_number');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array();
	}
}
