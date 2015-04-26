<?php
	class comment_model extends CI_Model {
		public function add($userId, $postId, $textId) {
			if ($this->db->insert('comment', array('user_id' => $userId, 'post_id' => $postId, 'text_id' => $textId)))
				return 0;
			else return 1;
		}
		
		public function getAll($postId) {
			$_sql = "SELECT * FROM s_comment WHERE post_id = ?";
			$_result = $this->db->query($_sql, array($postId));
			return $_result->result();
		}
	}
?>