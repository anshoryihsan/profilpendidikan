<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profil extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//Panggil Model
		$this->load->model('upt/Mprofil');
	}

	public function profilsekolah(){
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$data ['isi'] = $this->Mprofil->profil($dnss);
		$this->load->view('upt/header');
		$this->load->view('upt/Vprofil',$data);
		$this->load->view('upt/footer');
	}

}
?>
