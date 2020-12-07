<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Midentitas_sekolah extends CI_Model {
  function dataidentitassd() {
    $this->db->from('tb_identitas_sekolah');

    $this->db->where('bentuk_pndidikan = "SD"');

    $data = $this->db->get();

    return $data->result();
  }
  function dataidentitassmp() {
    $this->db->from('tb_identitas_sekolah');

    $this->db->where('bentuk_pndidikan = "SMP"');

    $data = $this->db->get();

    return $data->result();
  }
}
?>
