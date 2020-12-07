<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhome extends CI_Model
{
  function __construct()
    {
        parent::__construct();
    }


  function user()
  {
    $data = $this->db->order_by('id_user','asc');
    $data = $this->db->get('tb_user');
    return $data->result();
  }

  function input_data($data,$tb_user)
  {
  	$this->db->insert($tb_user, $data);
  }

  function delete($where,$tb_user)
  {
    $this->db->where($where);
    $this->db->delete($tb_user);
  }
  function ubahuser($where,$tb_user)
  {
    return $this->db->get_where($tb_user,$where);
  }
  function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>
