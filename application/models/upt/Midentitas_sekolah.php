<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Midentitas_sekolah extends CI_Model {
  function dataidentitassd($sess_wilayah) {
    $this->db->from('tb_identitas_sekolah');
    $where = "bentuk_pndidikan='sd' OR bentuk_pndidikan='slb'";
    $this->db->where('kecamatan', $sess_wilayah);
    $this->db->where($where);
//WHERE kecamatan="kec. ngamprah" AND bentuk_pndidikan="sd" OR bentuk_pndidikan="slb" AND th_ajaran="2017 / 2018 Ganjil"
    $data = $this->db->get();

    return $data->result();
  }
  function dataidentitassmp($sess_wilayah) {
    $this->db->from('tb_identitas_sekolah');

    $this->db->where('kecamatan', $sess_wilayah);
    $this->db->where('bentuk_pndidikan = "SMP"');

    $data = $this->db->get();

    return $data->result();
  }
  function ubahidentitas($where,$tb_identitas_sekolah)
  {
    return $this->db->get_where($tb_identitas_sekolah,$where);
  }
  function update_data($where,$data)
  {
    $this->db->from('tb_identitas_sekolah');
    $this->db->where($where);
		$this->db->update('tb_identitas_sekolah',$data);
  }
  function delete($where,$tb_identitas_sekolah)
  {
    $this->db->where($where);
    $this->db->delete($tb_identitas_sekolah);
  }
}
?>
