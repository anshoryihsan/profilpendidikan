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

  function profil_contoh($id2) {
    $this->db->from('tb_identitas_sekolah');
    $this->db->where('id_skolah', $id2);
    $data = $this->db->get();
    return $data->result();
  }

  function createPTK($data,$ptkn) {
    $this->db->insert($ptkn,$data);
  }
  function ubahptk($where,$ptkn) {
    return $this->db->get_where($ptkn,$where);
  }
  function updatePTK($where,$data,$table) {
    $this->db->where($where);
		$this->db->update($table,$data);
  }
  function delete($where,$ptkn)
  {
    $this->db->where($where);
    $this->db->delete($ptkn);
  }
}
?>
