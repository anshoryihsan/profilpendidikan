<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_didik extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//Panggil Model
		$this->load->model('upt/Mpeserta_didik');
	}
  public function detailpesertadidik(){
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$where = array('id_skolah' => $dnss );

		$data ['isi'] = $this->Mpeserta_didik->datapesertadidik($dnss);
		$data ['isiprofil'] = $this->Mpeserta_didik->profil($dnss);
		$this->load->view('upt/header');
		$this->load->view('upt/Vpeserta_didik',$data);
		$this->load->view('upt/footer');
	}
	public function tambah_peserta_didik()
	{
		$dnss = $_GET['idskolah'];
		$this->load->model('upt/Mptk');
		$data['identitas'] = $this->Mptk->profil($dnss);
		$this->load->view('upt/header');
		$this->load->view('upt/formPesertaDidik',$data);
		$this->load->view('upt/footer');
	}
	public function createPesertadidik()
	{
		$data = array(
			'nama' => $nama = $this->input->post('nama'),
			'jenis_kelamin' => $jenis_kelamin = $this->input->post('jenis_kelamin'),
			'nik' => $nik = $this->input->post('nik'),
			'nisn' => $nisn = $this->input->post('nisn'),
			'tempat_lahir' => $tempat_lahir = $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $tanggal_lahir = $this->input->post('tanggal_lahir'),
			'agama' => $agama = $this->input->post('agama'),
			'kebutuhan_khusus' => $kebutuhan_khusus = $this->input->post('kebutuhan_khusus'),
			'alamat' => $alamat = $this->input->post('alamat'),
			'rt' => $rt = $this->input->post('rt'),
			'rw' => $rw = $this->input->post('rw'),
			'nama_dusun' => $nama_dusun = $this->input->post('nama_dusun'),
			'desa_kelurahan' => $desa_kelurahan = $this->input->post('desa_kelurahan'),
			'kode_pos' => $kode_pos = $this->input->post('kode_pos'),
			'kecamatan' => $kecamatan = $this->input->post('kecamatan'),
			'jenis_tinggal' => $jenis_tinggal= $this->input->post('jenis_tinggal'),
			'alat_transportasi' => $alat_transportasi = $this->input->post('alat_transportasi'),
			'nomor_telepon' => $nomor_telepon = $this->input->post('nomor_telepon'),
			'nomor_handphone' => $nomor_handphone = $this->input->post('nomor_handphone'),
			'email' => $email = $this->input->post('email'),
			'terima_kps' => $terima_kps = $this->input->post('terima_kps'),
			'nomor_kps' => $nomor_kps = $this->input->post('nomor_kps'),
			'nama_ayah' => $nama_ayah = $this->input->post('nama_ayah'),
			'tahun_lahir_ayah' => $tahun_lahir_ayah = $this->input->post('tahun_lahir_ayah'),
			'pendidikan_ayah' => $pendidikan_ayah = $this->input->post('pendidikan_ayah'),
			'pekerjaan_ayah' => $pekerjaan_ayah = $this->input->post('pekerjaan_ayah'),
			'penghasilan_ayah' => $penghasilan_ayah = $this->input->post('penghasilan_ayah'),
			'nama_ibu' => $nama_ibu = $this->input->post('nama_ibu'),
			'tahun_lahir_ibu' => $tahun_lahir_ibu = $this->input->post('tahun_lahir_ibu'),
			'pendidikan_ibu' => $pendidikan_ibu = $this->input->post('pendidikan_ibu'),
			'pekerjaan_ibu' => $pekerjaan_ibu = $this->input->post('pekerjaan_ibu'),
			'penghasilan_ibu' => $penghasilan_ibu = $this->input->post('penghasilan_ibu'),
			'nama_wali' => $nama_wali = $this->input->post('nama_wali'),
			'tahun_lahir_wali' => $tahun_lahir_wali = $this->input->post('tahun_lahir_wali'),
			'pendidikan_wali' => $pendidikan_wali = $this->input->post('pendidikan_wali'),
			'pekerjaan_wali' => $pekerjaan_wali = $this->input->post('pekerjaan_wali'),
			'pengasilan_wali' => $pengasilan_wali = $this->input->post('pengasilan_wali'),
			'rombel' => $rombel = $this->input->post('rombel'),
			'id_skolah' => $id_skolah = $this->input->post('id_skolah'),
			'th_ajaran' => $th_ajaran = $this->input->post('th_ajaran'),
			);
			$this->Mpeserta_didik->createPesertadidik($data,'tb_peserta_didik');
			redirect("upt/Peserta_didik/detailpesertadidik?idnss=$id_skolah");
	}

	function ubah() {
		$id = $_GET['idpeserta'];
		$where = array('id_peserta' => $id );
		$data ['peserta'] = $this->Mpeserta_didik->ubahpesertadidik($where,'tb_peserta_didik')->result();
		$this->load->view('upt/header');
		$this->load->view('upt/ubahVpeserta_didik',$data);
		$this->load->view('upt/footer');
	}

	function updatePeserta_didik()	{
		$data = array(
			'nama' => $nama = $this->input->post('nama'),
			'jenis_kelamin' => $jenis_kelamin = $this->input->post('jenis_kelamin'),
			'nik' => $nik = $this->input->post('nik'),
			'nisn' => $nisn = $this->input->post('nisn'),
			'tempat_lahir' => $tempat_lahir = $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $tanggal_lahir = $this->input->post('tanggal_lahir'),
			'agama' => $agama = $this->input->post('agama'),
			'kebutuhan_khusus' => $kebutuhan_khusus = $this->input->post('kebutuhan_khusus'),
			'alamat' => $alamat = $this->input->post('alamat'),
			'rt' => $rt = $this->input->post('rt'),
			'rw' => $rw = $this->input->post('rw'),
			'nama_dusun' => $nama_dusun = $this->input->post('nama_dusun'),
			'desa_kelurahan' => $desa_kelurahan = $this->input->post('desa_kelurahan'),
			'kode_pos' => $kode_pos = $this->input->post('kode_pos'),
			'kecamatan' => $kecamatan = $this->input->post('kecamatan'),
			'jenis_tinggal' => $jenis_tinggal= $this->input->post('jenis_tinggal'),
			'alat_transportasi' => $alat_transportasi = $this->input->post('alat_transportasi'),
			'nomor_telepon' => $nomor_telepon = $this->input->post('nomor_telepon'),
			'nomor_handphone' => $nomor_handphone = $this->input->post('nomor_handphone'),
			'email' => $email = $this->input->post('email'),
			'terima_kps' => $terima_kps = $this->input->post('terima_kps'),
			'nomor_kps' => $nomor_kps = $this->input->post('nomor_kps'),
			'nama_ayah' => $nama_ayah = $this->input->post('nama_ayah'),
			'tahun_lahir_ayah' => $tahun_lahir_ayah = $this->input->post('tahun_lahir_ayah'),
			'pendidikan_ayah' => $pendidikan_ayah = $this->input->post('pendidikan_ayah'),
			'pekerjaan_ayah' => $pekerjaan_ayah = $this->input->post('pekerjaan_ayah'),
			'penghasilan_ayah' => $penghasilan_ayah = $this->input->post('penghasilan_ayah'),
			'nama_ibu' => $nama_ibu = $this->input->post('nama_ibu'),
			'tahun_lahir_ibu' => $tahun_lahir_ibu = $this->input->post('tahun_lahir_ibu'),
			'pendidikan_ibu' => $pendidikan_ibu = $this->input->post('pendidikan_ibu'),
			'pekerjaan_ibu' => $pekerjaan_ibu = $this->input->post('pekerjaan_ibu'),
			'penghasilan_ibu' => $penghasilan_ibu = $this->input->post('penghasilan_ibu'),
			'nama_wali' => $nama_wali = $this->input->post('nama_wali'),
			'tahun_lahir_wali' => $tahun_lahir_wali = $this->input->post('tahun_lahir_wali'),
			'pendidikan_wali' => $pendidikan_wali = $this->input->post('pendidikan_wali'),
			'pekerjaan_wali' => $pekerjaan_wali = $this->input->post('pekerjaan_wali'),
			'pengasilan_wali' => $pengasilan_wali = $this->input->post('pengasilan_wali'),
			'rombel' => $rombel = $this->input->post('rombel'),
			'id_skolah' => $id_skolah = $this->input->post('id_skolah'),
			'th_ajaran' => $th_ajaran = $this->input->post('th_ajaran'),
		);
		$where = array(
			'id_peserta' => $id_peserta = $this->input->post('id_peserta')
		);
		$this->Mpeserta_didik->updatePeserta_didik($where,$data,'tb_peserta_didik');
		$this->session->set_flashdata('suksess','<script>alert("Suksess: data berhasil di rubah!")</script>');
		redirect("upt/Peserta_didik/detailpesertadidik?idnss=$id_skolah");
	}
	public function delete() {
		$id = $_GET['idpeserta'];
		$dnss = $this->input->get('idskolah');
		$where = array('id_peserta' => $id );
		$id_sekolah = $this->Mpeserta_didik->delete($where,'tb_peserta_didik');
		$id_sekolah = $this->Mpeserta_didik->profil($dnss);
		foreach($id_sekolah as $row);
		$idnss=$row->id_skolah;
		//print_r($dnss);
		redirect("upt/Peserta_didik/detailpesertadidik?idnss=$idnss");
	}
}
