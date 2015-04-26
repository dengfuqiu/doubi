<?php
	class post_model extends CI_Model {
		public function add($userId, $board, $title, $textId) {
			$_result = $this->db->insert('post', array('title' => $title, 
				'user_id' => $userId, 'board' => $board, 'text_id' => $textId));
			if ($_result) return 0;
			else return 1;
		}
		
		public function getBoardHot($board, $count) {
			$_sql = "SELECT * FROM s_post WHERE board=? ORDER BY comment_count LIMIT 0, ?";
			$_result = $this->db->query($_sql, array($board, $count));
			return $_result->result();			
		}
		
		public function getHot($count) {
			$_sql = "SELECT * FROM s_post ORDER BY comment_count LIMIT 0, ?";
			$_result = $this->db->query($_sql, array($count));
			return $_result->result();	
		}
		
		public function get($id) {
			$_result = $this->db->get_where('post', array('id' => $id));
			$_data = $_result->result();
			if (1 === sizeof($_data)) return $_data[0];
			else null;
		}
		
		public function view($id) {
			$_sql = "UPDATE s_post SET view_count = view_count + 1 WHERE id = ?";
			return $this->db->query($_sql, array($id));	
		}
		
		public function comment($id) {
			$_sql = "UPDATE s_post SET comment_count = comment_count + 1 WHERE id = ?";
			return $this->db->query($_sql, array($id));	
		}
	}

?>