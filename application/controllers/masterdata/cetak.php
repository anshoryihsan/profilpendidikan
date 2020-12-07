<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class cetak extends CI_Controller {

  function __construct() {
    parent::__construct();
    //Panggil Model
    $this->load->model('masterdata/mhome');
  }

  function cetakPDF(){

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

    $this->load->view('masterdata/Vcetakpdf',$data);
    //print_r($data);

    // load view yang akan digenerate atau diconvert
    // contoh kita akan membuat pdf dari halaman welcome codeigniter
    // dapatkan output html
    $html = $this->output->get_output();
    // Load/panggil library dompdfnya
    $this->load->library('dompdf_gen');
    // Convert to PDF
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    //utk menampilkan preview pdf
    $this->dompdf->stream("welcome.pdf", array('Attachment' => 0));
    //atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
    //$this->dompdf->stream("welcome.pdf");
  }
}

 ?>
