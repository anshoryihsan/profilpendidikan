<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
  public function cek($email, $password){
  		$this->db->where('email',$email);
      $this->db->where('password',$password);
  		return $this->db->get('tb_user');
  	}
}
?>
