<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mprofil extends CI_Model {

  function profil($dnss) {
    $this->db->from('tb_identitas_sekolah');
    $this->db->where('id_skolah', $dnss);
    $data = $this->db->get();
    //print_r($data);
    return $data->result();
  }
}
?>
