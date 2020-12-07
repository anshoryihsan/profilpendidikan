<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PTK extends CI_Controller {
	function __construct() {
		parent::__construct();
		//Panggil Model
		$this->load->model('upt/Mptk');
	}
  public function detailptk() {
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$sess = $this->session->userdata($dnss);
		$where = array('id_skolah' => $dnss );
		$data ['isi'] = $this->Mptk->dataptk($dnss);
		$data ['isiprofil'] = $this->Mptk->profil($dnss);
		$this->load->view('upt/header');
		$this->load->view('upt/Vptk',$data);
		$this->load->view('upt/footer');
	}
	public function tambah()
	{
		$dnss = $_GET['idskolah'];
		$data['identitas'] = $this->Mptk->profil($dnss);
		$this->load->view('upt/header');
		$this->load->view('upt/formPTK',$data,$dnss);
		$this->load->view('upt/footer');
	}
	public function createPTK()
	{
		$data = array(
			'nama' => $nama = $this->input->post('nama'),
			'jenis_kelamin' => $jenis_kelamin = $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $tempat_lahir = $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $tanggal_lahir = $this->input->post('tanggal_lahir'),
			'nik' => $nik = $this->input->post('nik'),
			'nip' => $nik = $this->input->post('nip'),
			'nuptk' => $nik = $this->input->post('nuptk'),
			'jenis_ptk' => $nik = $this->input->post('jenis_ptk'),
			'setatus_pegawai' => $setatus_pegawai = $this->input->post('setatus_pegawai'),
			'agama' => $agama = $this->input->post('agama'),
			'alamat' => $alamat = $this->input->post('alamat'),
			'rt' => $rt = $this->input->post('rt'),
			'rw' => $rw = $this->input->post('rw'),
			'dusun' => $dusun = $this->input->post('dusun'),
			'desa_kelurahan' => $desa_kelurahan = $this->input->post('desa_kelurahan'),
			'kode_pos' => $kode_pos = $this->input->post('kode_pos'),
			'kecamatan' => $kecamatan = $this->input->post('kecamatan'),
			'nomor_telepon' => $nomor_telepon = $this->input->post('nomor_telepon'),
			'nomor_hp' => $nomor_hp = $this->input->post('nomor_hp'),
			'email' => $rt = $this->input->post('email'),
			'sk_cpns' => $sk_cpns = $this->input->post('sk_cpns'),
			'tanggal_cpns' => $tanggal_cpns = $this->input->post('tanggal_cpns'),
			'sk_pengangkatan' => $sk_pengangkatan = $this->input->post('sk_pengangkatan'),
			'tmt_pengangkatan' => $tmt_pengangkatan = $this->input->post('tmt_pengangkatan'),
			'lembaga' => $lembaga = $this->input->post('lembaga'),
			'sumber_gaji' => $sumber_gaji = $this->input->post('sumber_gaji'),
			'nama_ibu_kandung' => $nama_ibu_kandung = $this->input->post('nama_ibu_kandung'),
			'status_perkawinan' => $status_perkawinan = $this->input->post('status_perkawinan'),
			'nama_suami_istri' => $nama_suami_istri = $this->input->post('nama_suami_istri'),
			'nip_suami_istri' => $nip_suami_istri = $this->input->post('nip_suami_istri'),
			'pekerjaan_suami_istri' => $pekerjaan_suami_istri = $this->input->post('pekerjaan_suami_istri'),
			'tmt_pns' => $tmt_pns = $this->input->post('tmt_pns'),
			'lisensi_kepala_sekolah' => $lisensi_kepala_sekolah = $this->input->post('lisensi_kepala_sekolah'),
			'npwp' => $npwp = $this->input->post('npwp'),
			'pendidikan_terakhir' => $pendidikan_terakhir = $this->input->post('pendidikan_terakhir'),
			'penugasan' => $penugasan = $this->input->post('penugasan'),
			'id_skolah' => $id_skolah = $this->input->post('id_skolah'),
			'th_ajaran' => $th_ajaran = $this->input->post('th_ajaran'),
			);
			$this->Mptk->createPTK($data,'ptkn');
			redirect("upt/PTK/detailptk?idnss=$id_skolah");
	}
	public function ubah()
	{
		$id = $_GET['idptk'];
		$where = array('id_ptk' => $id );
		$data ['ptk'] = $this->Mptk->ubahptk($where,'ptkn')->result();
		$this->load->view('upt/header');
		$this->load->view('upt/ubahVptk',$data);
		$this->load->view('upt/header');
	}
	public function updatePTK()
	{
		$data = array(
			'nama' => $nama = $this->input->post('nama'),
			'jenis_kelamin' => $jenis_kelamin = $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $tempat_lahir = $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $tanggal_lahir = $this->input->post('tanggal_lahir'),
			'nik' => $nik = $this->input->post('nik'),
			'nip' => $nik = $this->input->post('nip'),
			'nuptk' => $nik = $this->input->post('nuptk'),
			'jenis_ptk' => $nik = $this->input->post('jenis_ptk'),
			'setatus_pegawai' => $setatus_pegawai = $this->input->post('setatus_pegawai'),
			'agama' => $agama = $this->input->post('agama'),
			'alamat' => $alamat = $this->input->post('alamat'),
			'rt' => $rt = $this->input->post('rt'),
			'rw' => $rw = $this->input->post('rw'),
			'dusun' => $dusun = $this->input->post('dusun'),
			'desa_kelurahan' => $desa_kelurahan = $this->input->post('desa_kelurahan'),
			'kode_pos' => $kode_pos = $this->input->post('kode_pos'),
			'kecamatan' => $kecamatan = $this->input->post('kecamatan'),
			'nomor_telepon' => $nomor_telepon = $this->input->post('nomor_telepon'),
			'nomor_hp' => $nomor_hp = $this->input->post('nomor_hp'),
			'email' => $rt = $this->input->post('email'),
			'sk_cpns' => $sk_cpns = $this->input->post('sk_cpns'),
			'tanggal_cpns' => $tanggal_cpns = $this->input->post('tanggal_cpns'),
			'sk_pengangkatan' => $sk_pengangkatan = $this->input->post('sk_pengangkatan'),
			'tmt_pengangkatan' => $tmt_pengangkatan = $this->input->post('tmt_pengangkatan'),
			'lembaga' => $lembaga = $this->input->post('lembaga'),
			'sumber_gaji' => $sumber_gaji = $this->input->post('sumber_gaji'),
			'nama_ibu_kandung' => $nama_ibu_kandung = $this->input->post('nama_ibu_kandung'),
			'status_perkawinan' => $status_perkawinan = $this->input->post('status_perkawinan'),
			'nama_suami_istri' => $nama_suami_istri = $this->input->post('nama_suami_istri'),
			'nip_suami_istri' => $nip_suami_istri = $this->input->post('nip_suami_istri'),
			'pekerjaan_suami_istri' => $pekerjaan_suami_istri = $this->input->post('pekerjaan_suami_istri'),
			'tmt_pns' => $tmt_pns = $this->input->post('tmt_pns'),
			'lisensi_kepala_sekolah' => $lisensi_kepala_sekolah = $this->input->post('lisensi_kepala_sekolah'),
			'npwp' => $npwp = $this->input->post('npwp'),
			'pendidikan_terakhir' => $pendidikan_terakhir = $this->input->post('pendidikan_terakhir'),
			'penugasan' => $penugasan = $this->input->post('penugasan'),
			'id_skolah' => $id_skolah = $this->input->post('id_skolah'),
			'th_ajaran' => $th_ajaran = $this->input->post('th_ajaran'),
			);
			$where = array(
				'id_ptk' => $id_ptk = $this->input->post('id_ptk')
			);

			$this->Mptk->updatePTK($where,$data,'ptkn');
			$this->session->set_flashdata('suksess','<script>alert("Suksess: data berhasil di simpan!")</script>');
			redirect("upt/PTK/detailptk?idnss=$id_skolah");
	}
	public function delete()
	{
		$id = $_GET['idptk'];
		$dnss = $this->input->get('idpeserta2');
		$where = array('id_ptk' => $id );

		$id_sekolah = $this->Mptk->delete($where,'ptkn');
		$id_sekolah = $this->Mptk->profil($dnss);
		redirect("upt/PTK/detailptk?idnss=$id2");
	}

}
?>
