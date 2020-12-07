<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhome extends CI_Model
{
  function dataidentitas($sess_wilayah) {
    $this->db->from('tb_identitas_sekolah');
    $this->db->where('kecamatan', $sess_wilayah);
    $this->db->where('bentuk_pndidikan = "SD"');
    $data = $this->db->get();
    return $data->result();
  }
  function input_data_identitas_sekolah($data)  {
      $this->db->insert("tb_identitas_sekolah",$data);
  }

  function input_data_ptk($data) {
    $insert = $this->db->insert("ptkn",$data);
  }

  function input_data_peserta_didik($data) {
    $this->db->insert("tb_peserta_didik",$data);
  }

  function input_data_prasarana($data) {
    $this->db->insert("tb_prasarana",$data);
  }

  function delete($where,$tb_user)
  {
    $this->db->where($where);
    $this->db->delete($tb_user);
  }
  function ubahdata($where,$tb_user)
  {
    return $this->db->get_where($tb_user,$where);
  }
}
?>
