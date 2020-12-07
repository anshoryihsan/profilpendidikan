<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Identias_sekolah extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//Panggil Model
		$this->load->model('upt/Midentitas_sekolah');
		// load form and url helpers
  	$this->load->helper(array('form', 'url'));
  	// load form_validation library
  	$this->load->library('form_validation');
	}
	//endfunction index
  public function datasd(){
		//Data Session
		$sess_wilayah = $this->session->userdata('wilayah');
		#tampilkan data
		$data['isi'] = $this->Midentitas_sekolah->dataidentitassd($sess_wilayah);

		$this->load->view('upt/header',$data);
		$this->load->view('upt/Videntitas_sekolah',$data);
		$this->load->view('upt/footer',$data);
	}//endfunction datasd

	public function datasmp(){
		//Data Session
		$sess_wilayah = $this->session->userdata('wilayah');
		#tampilkan data
		$data['isi'] = $this->Midentitas_sekolah->dataidentitassmp($sess_wilayah);

		$this->load->view('upt/header',$data);
		$this->load->view('upt/Videntitas_sekolah',$data);
		$this->load->view('upt/footer');
	}//endfunction datasd
	function ubah() {
		$id = $_GET['ididentitas'];
		$where = array('id_skolah' => $id );
		$data ['tb_identitas'] = $this->Midentitas_sekolah->ubahidentitas($where,'tb_identitas_sekolah')->result();
		$this->load->view('upt/header');
		$this->load->view('upt/ubahVidentitas_sekolah',$data);
		$this->load->view('upt/footer');
	}
	function simpan_ubah_Identitas() {
		$id_skolah = $this->input->post('id_skolah');
		$nama_sekolah = $this->input->post('nama_sekolah');
		$nss = $this->input->post('nss');
		$npsn = $this->input->post('npsn');
		$status_sekolah = $this->input->post('status_sekolah');
		$bentuk_pndidikan = $this->input->post('bentuk_pndidikan');
		$alamat = $this->input->post('alamat');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$nama_dusun = $this->input->post('nama_dusun');
		$desa_kelurahan = $this->input->post('desa_kelurahan');
		$kode_pos = $this->input->post('kode_pos');
		$kecamatan = $this->input->post('kecamatan');
		$propinsi = $this->input->post('propinsi');
		$telepon = $this->input->post('telepon');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$sk_pendirian_sekolah = $this->input->post('sk_pendirian_sekolah');
		$tanggal_sk_pendirian = $this->input->post('tanggal_sk_pendirian');
		$sk_izin_operasional = $this->input->post('sk_izin_operasional');
		$sk_akreditasi = $this->input->post('sk_akreditasi');
		$nama_bank = $this->input->post('nama_bank');
		$cabang_kcp_unit = $this->input->post('cabang_kcp_unit');
		$nomor_rekening = $this->input->post('nomor_rekening');
		$rekening_atas_nama = $this->input->post('rekening_atas_nama');
		$nama_kepala_sekolah = $this->input->post('nama_kepala_sekolah');

		$data = array(
			'nama_sekolah' => $nama_sekolah,
			'nss' => $nss,
			'npsn' => $npsn,
			'status_sekolah' => $status_sekolah,
			'bentuk_pndidikan' => $bentuk_pndidikan,
			'alamat' => $alamat,
			'rt' => $rt,
			'rw' => $rw,
			'nama_dusun' => $nama_dusun,
			'bentuk_pndidikan' => $bentuk_pndidikan,
			'kode_pos' => $kode_pos,
			'kecamatan' => $kecamatan,
			'propinsi' => $propinsi,
			'no_telepon' => $telepon,
			'no_fax' => $fax,
			'email' => $email,
			'website' => $website,
			'sk_pendirian_sekolah' => $sk_pendirian_sekolah,
			'tanggal_sk_pendirian' => $tanggal_sk_pendirian,
			'sk_izin_operasional' => $sk_izin_operasional,
			'sk_akreditasi' => $sk_akreditasi,
			'nama_bank' => $nama_bank,
			'cabang_kcp_unit' => $cabang_kcp_unit,
			'nomor_rekening' => $nomor_rekening,
			'rekening_atas_nama' => $rekening_atas_nama,
			'nama_kepala_sekolah' => $nama_kepala_sekolah,
		);
		$where = array(
			'id_skolah' => $id_skolah
		);
		$this->Midentitas_sekolah->update_data($where,$data,'tb_identitas_sekolah');
		redirect('upt/home');
	}
	function delete()	{
		$id = $_GET['ididentitas'];
		$where = array('id_skolah' => $id );
		$this->Midentitas_sekolah->delete($where,'tb_identitas_sekolah');
		redirect('upt/home');
	}
}
