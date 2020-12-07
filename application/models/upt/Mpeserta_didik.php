<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mpeserta_didik extends CI_Model {
  function datapesertadidik($dnss) {
    $this->db->from('tb_peserta_didik');
    $this->db->where('id_skolah', $dnss);
    $data = $this->db->get();
    return $data->result();
  }
  function profil($dnss) {
    $this->db->from('tb_identitas_sekolah');
    $this->db->where('id_skolah', $dnss);
    $data = $this->db->get();
    return $data->result();
  }
  function createPesertadidik($data,$tb_peserta_didik) {
    $this->db->insert($tb_peserta_didik,$data);
  }
  function ubahpesertadidik($where,$tb_peserta_didik) {
    return $this->db->get_where($tb_peserta_didik,$where);
  }
  function updatePeserta_didik($where,$data,$table) {
    $this->db->where($where);
		$this->db->update($table,$data);
  }
  function delete($where,$tb_peserta_didik) {
    $this->db->where($where);
    $this->db->delete($tb_peserta_didik);
  }
}
