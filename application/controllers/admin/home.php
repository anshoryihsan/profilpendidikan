<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	// public function index() {
	//
	// 	$this->load->view('admin/home');
	// }
	public function index() {
		$data['title'] = 'admin';
		$data['judul'] = 'login sebagai admin';
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['password'] = $this->session->userdata('password');
		$data['level'] = $this->session->userdata('level');
		$data['wilayah'] = $this->session->userdata('wilayah');
		$this->load->model('admin/mhome');
		#tampilkan data
		$data['isi'] = $this->mhome->user();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/home',$data);
		$this->load->view('admin/footer');

	}
	function tambahuser(){
		$this->load->view('admin/header');
		$this->load->view('admin/tambahuser');
		$this->load->view('admin/footer');
	}
	function tambah(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$wilayah = $this->input->post('wilayah');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'level' => $level,
			'wilayah' => $wilayah,
			);
		$this->load->model('admin/mhome');
		$this->mhome->input_data($data,'tb_user');
		redirect('admin/home');
	}
	function delete(){
		$id = $_GET['uid'];

		$where = array('id_user' => $id );

		$this->load->model('admin/mhome');
		$this->mhome->delete($where,'tb_user');
		redirect('admin/home');
	}
	function ubah(){
		$id = $_GET['uid'];

		$where = array('id_user' => $id );

		$this->load->model('admin/mhome');
		$data ['tb_user'] = $this->mhome->ubahuser($where,'tb_user')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/ubahuser',$data);
		$this->load->view('admin/footer');
	}
	function simpan_ubah_user()
  {
    $id = $this->input->post('id');
  	$nama = $this->input->post('nama');
  	$email = $this->input->post('email');
  	$password = $this->input->post('password');
  	$level = $this->input->post('level');
  	$wilayah = $this->input->post('wilayah');

    $data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'level' => $level,
			'wilayah' => $wilayah,
		);

		$where = array(
			'id_user' => $id
		);

		$this->load->model('admin/mhome');
		$this->mhome->update_data($where,$data,'tb_user');
		redirect('admin/home');
  }
}
?>
