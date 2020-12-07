<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Prasarana extends CI_Controller {

  function __construct()  {
    parent::__construct();
    //Panggil Model
    $this->load->model('upt/Mprasarana');
  }
  public function detailprasarana(){
		//ambil idnss dari data sd
		$dnss = $_GET['idnss'];
		$where = array('id_skolah' => $dnss );

		$data ['isi'] = $this->Mprasarana->dataprasarana($dnss);
    $data ['isiprofil'] = $this->Mprasarana->profil($dnss);
    $this->load->view('upt/header');
		$this->load->view('upt/vdetailprasarana',$data);
    $this->load->view('upt/footer');
	}
  public function tambah_prasarana() {
		$dnss = $_GET['idskolah'];
		$this->load->model('upt/Mptk');
		$data['prasarana'] = $this->Mptk->profil($dnss);
    $this->load->view('upt/header');
		$this->load->view('upt/formPrasarana',$data);
    $this->load->view('upt/footer');
	}
  public function createPrasarana() {
    $data = array(
      'jenis_prasarana' => $jenis_prasarana = $this->input->post('jenis_prasarana'),
      'nama' => $nama = $this->input->post('nama'),
      'panjang' => $panjang = $this->input->post('panjang'),
      'lebar' => $lebar = $this->input->post('lebar'),
      'status_kepemilikan' => $status_kepemilikan = $this->input->post('status_kepemilikan'),
      'penutup_atap' => $penutup_atap = $this->input->post('penutup_atap'),
      'rangka_atap' => $rangka_atap = $this->input->post('rangka_atap'),
      'lisplang_talang' => $lisplang_talang = $this->input->post('lisplang_talang'),
      'rangka_plafon' => $rangka_plafon = $this->input->post('rangka_plafon'),
      'penutup_plafon' => $penutup_plafon = $this->input->post('penutup_plafon'),
      'cat_plafon' => $cat_plafon = $this->input->post('cat_plafon'),
      'kolom_ringbalok' => $kolom_ringbalok = $this->input->post('kolom_ringbalok'),
      'bata_dinding' => $bata_dinding = $this->input->post('bata_dinding'),
      'cat_dinding' => $cat_dinding = $this->input->post('cat_dinding'),
      'kusen' => $kusen = $this->input->post('kusen'),
      'daun_pintu' => $daun_pintu= $this->input->post('daun_pintu'),
      'daun_jendela' => $daun_jendela = $this->input->post('daun_jendela'),
      'struktur_bawah' => $struktur_bawah = $this->input->post('struktur_bawah'),
      'penutup_lantai' => $penutup_lantai = $this->input->post('penutup_lantai'),
      'pondasi' => $pondasi = $this->input->post('pondasi'),
      'sloop' => $sloop = $this->input->post('sloop'),
      'listrik' => $listrik = $this->input->post('listrik'),
      'air_hujan_rambatan' => $air_hujan_rambatan = $this->input->post('air_hujan_rambatan'),
      'id_skolah' => $id_skolah = $this->input->post('id_skolah'),
      'th_ajaran' => $th_ajaran = $this->input->post('th_ajaran'),
    );
    //print_r($data);
  $this->Mprasarana->createPrasarana($data,'tb_prasarana');
  redirect("upt/Prasarana/detailprasarana?idnss=$id_skolah");
  }
  public function delete() {
    $id = $_GET['idprasarana'];
		$dnss = $this->input->get('idskolah');
		$where = array('id_prasarana' => $id );
		$id_sekolah = $this->Mprasarana->delete($where,'tb_prasarana');
		$id_sekolah = $this->Mprasarana->profil($dnss);
		foreach($id_sekolah as $row);
		$idnss=$row->id_skolah;
		//print_r($dnss);
		redirect("upt/Prasarana/detailprasarana?idnss=$idnss");
  }
  public function ubah() {
    $id = $_GET['idprasarana'];
		$where = array('id_prasarana' => $id );
    $data ['prasarana'] = $this->Mprasarana->ubahprasarana($where,'tb_prasarana')->result();
    $this->load->view('upt/header');
		$this->load->view('upt/ubahVprasarana',$data);
    $this->load->view('upt/prasarana');
  }
  public function updatePrasarana() {
    $data = array(
      'jenis_prasarana' => $jenis_prasarana = $this->input->post('jenis_prasarana'),
      'nama' => $nama = $this->input->post('nama'),
      'panjang' => $panjang = $this->input->post('panjang'),
      'lebar' => $lebar = $this->input->post('lebar'),
      'status_kepemilikan' => $status_kepemilikan = $this->input->post('status_kepemilikan'),
      'penutup_atap' => $penutup_atap = $this->input->post('penutup_atap'),
      'rangka_atap' => $rangka_atap = $this->input->post('rangka_atap'),
      'lisplang_talang' => $lisplang_talang = $this->input->post('lisplang_talang'),
      'rangka_plafon' => $rangka_plafon = $this->input->post('rangka_plafon'),
      'penutup_plafon' => $penutup_plafon = $this->input->post('penutup_plafon'),
      'cat_plafon' => $cat_plafon = $this->input->post('cat_plafon'),
      'kolom_ringbalok' => $kolom_ringbalok = $this->input->post('kolom_ringbalok'),
      'bata_dinding' => $bata_dinding = $this->input->post('bata_dinding'),
      'cat_dinding' => $cat_dinding = $this->input->post('cat_dinding'),
      'kusen' => $kusen = $this->input->post('kusen'),
      'daun_pintu' => $daun_pintu= $this->input->post('daun_pintu'),
      'daun_jendela' => $daun_jendela = $this->input->post('daun_jendela'),
      'struktur_bawah' => $struktur_bawah = $this->input->post('struktur_bawah'),
      'penutup_lantai' => $penutup_lantai = $this->input->post('penutup_lantai'),
      'pondasi' => $pondasi = $this->input->post('pondasi'),
      'sloop' => $sloop = $this->input->post('sloop'),
      'listrik' => $listrik = $this->input->post('listrik'),
      'air_hujan_rambatan' => $air_hujan_rambatan = $this->input->post('air_hujan_rambatan'),
      'id_skolah' => $id_skolah = $this->input->post('id_skolah'),
      'th_ajaran' => $th_ajaran = $this->input->post('th_ajaran'),
    );
    $where = array(
			'id_prasarana' => $id_prasarana = $this->input->post('id_prasarana')
		);
    //print_r($where);
    //$this->Mpeserta_didik->updatePeserta_didik($where,$data,'tb_peserta_didik');
		$this->Mprasarana->updatePrasarana($where,$data,'tb_prasarana');
	  $this->session->set_flashdata('suksess','<script>alert("Suksess: data berhasil di rubah!")</script>');
		redirect("upt/Prasarana/detailprasarana?idnss=$id_skolah");
  }
}

 ?>
