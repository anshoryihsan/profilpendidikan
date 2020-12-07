<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profil extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//Panggil Model
		$this->load->model('masterdata/Mprofil');
	}
	public function profilsekolah(){
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$where = array('nss' => $dnss );
		
		$data ['isi'] = $this->Mprofil->profil($dnss);
		$this->load->view('masterdata/header',$data);
		$this->load->view('masterdata/Vprofil',$data);
		$this->load->view('masterdata/footer',$data);
	}
}
?>
