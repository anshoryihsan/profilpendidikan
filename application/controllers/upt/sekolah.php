<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  /**
   *
   */
  class sekolah extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
     $this->load->model('upt/msekolah');
    }

    public function detailsekolah(){
      //ambil idnss dari data sd
      $dnss = $_GET['idnss'];
      $where = array('nss' => $dnss );

      $data ['isi'] = $this->mhome->datasd($dnss);
      $this->load->view('upt/detailpesertadidik',$data);

    }

  }

 ?>
