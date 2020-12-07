<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_didik extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//Panggil Model
		$this->load->model('masterdata/Mpeserta_didik');
	}
  public function detailpesertadidik(){
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$where = array('id_skolah' => $dnss );

		$data ['isi'] = $this->Mpeserta_didik->datapesertadidik($dnss);
		$data ['isiprofil'] = $this->Mpeserta_didik->profil($dnss);
		$this->load->view('masterdata/header',$data);
		$this->load->view('masterdata/Vpeserta_didik',$data);
		$this->load->view('masterdata/footer',$data);
	}
}
