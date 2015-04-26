<?php 
	class user_model extends CI_Model {	
		public function add($username, $pwd) {
			$_result = $this->db->insert('user', 
				array('username' => $username, 'pwd' => $pwd));
			if ($_result) return 0;
			else return 1;
		}
		
		public function get($username, $pwd) {
			$_result = $this->db->get_where('user',
				array('username' => $username, 'pwd' => $pwd));
				
			return $_result->result();
		}
	}

?>