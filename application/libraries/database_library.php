<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dataae_library Database_library{
	private $table_name;

	function pake_table($table)	{			
			$CI=& get_instance();
			$CI->table_name=$table;
			return true;
	}

	function tambah_data($data)	{
		$CI=& get_instance();
		if($this->pake_table($CI->table_name)==true) {
			$CI->db->insert($CI->table_name, $data);
			if($CI->db->affected_rows() > 0) {
				return true;
			} 
			else{
				return false;
			}
		}
	}
}
?>