<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Identitas_sekolah extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//Panggil Model
		$this->load->model('masterdata/Midentitas_sekolah');
	}
	//endfunction index
  public function index(){
		#tampilkan data
		$data['isi'] = $this->Midentitas_sekolah->dataidentitassd();

		$this->load->view('masterdata/header',$data);
		$this->load->view('masterdata/Videntitas_sekolah',$data);
		$this->load->view('masterdata/footer',$data);
	}//endfunction datasd

	public function datasmp(){
		#tampilkan data
		$data['isi'] = $this->Midentitas_sekolah->dataidentitassmp();

		$this->load->view('masterdata/header',$data);
		$this->load->view('masterdata/Videntitas_sekolah',$data);
		$this->load->view('masterdata/footer',$data);
	}//endfunction datasd
}
