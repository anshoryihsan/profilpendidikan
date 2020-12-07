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
}
