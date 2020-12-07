<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Mprasarana extends CI_Model {
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
  function createPrasarana($data,$tb_prasarana)  {
    $this->db->insert($tb_prasarana,$data);
  }
  function delete($where,$tb_prasarana) {
    $this->db->where($where);
    $this->db->delete($tb_prasarana);
  }
  function ubahprasarana($where,$tb_prasarana) {
    return $this->db->get_where($tb_prasarana,$where);
  }
  function updatePrasarana($where,$data,$table) {
    $this->db->where($where);
		$this->db->update($table,$data);
  }
}
?>
