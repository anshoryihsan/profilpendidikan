<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PTK extends CI_Controller {
	function __construct() {
		parent::__construct();
		//Panggil Model
		$this->load->model('masterdata/Mptk');
	}
  public function detailptk() {
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$where = array('id_skolah' => $dnss );

		$data ['isi'] = $this->Mptk->dataptk($dnss);
		$data ['isiprofil'] = $this->Mptk->profil($dnss);
		$this->load->view('masterdata/header',$data);
		$this->load->view('masterdata/Vptk',$data);
		$this->load->view('masterdata/footer',$data);
	}
}
?>
