<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class home extends CI_Controller {

  function __construct()  {
    parent::__construct();
    //Panggil Model
    $this->load->model('masterdata/mhome');
  }
  function index()  {
    $this->load->helper('url');
    $segmen3 = $this->uri->segment(3);
    $data["tajar"] = $this->mhome->getresults();

    //caridata
    $thn = $this->input->post('thajar');
    $bntkdidik = $this->input->post('bdidikan');
    //$this->db->trans_start();
    $data["isi"] = $this->mhome->cari($thn,$bntkdidik);
    $data["kbb"] = $this->mhome->kbb($thn,$bntkdidik);

    $data["totpdidikagama"] = $this->mhome->totpdidikagama($thn,$bntkdidik);
    $data["pdidikagama"] = $this->mhome->pdidikagama($thn,$bntkdidik);

    $data["totstpegawai"] = $this->mhome->totstpegawai($thn,$bntkdidik);
    $data["stpegawai"] = $this->mhome->stpegawai($thn,$bntkdidik);

    $data["totjnsptk"] = $this->mhome->totjnsptk($thn,$bntkdidik);
    $data["jnsptk"] = $this->mhome->jnsptk($thn,$bntkdidik);

    $this->load->view('masterdata/header');
    $this->load->view('masterdata/vhome',$data);
    $this->load->view('masterdata/footer');
    //print_r($data);
  }
}


?>
