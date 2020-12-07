<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mptk extends CI_Model {
  function dataptk($dnss) {
    $this->db->from('ptkn');
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
?>
