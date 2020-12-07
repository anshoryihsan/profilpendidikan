<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Prasarana extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    //Panggil Model
    $this->load->model('masterdata/Mprasarana');
  }
  public function detailprasarana(){
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$where = array('id_skolah' => $dnss );

		$data ['isi'] = $this->Mprasarana->dataprasarana($dnss);
    $data ['isiprofil'] = $this->Mprasarana->profil($dnss);
    $this->load->view('masterdata/header',$data);
    $this->load->view('masterdata/vdetailprasarana',$data);
    $this->load->view('masterdata/footer',$data);
	}
}

 ?>
