<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Mprasarana extends CI_Model
{

  function dataprasarana($dnss) {
    $this->db->from('tb_prasarana');
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
