<?php
	class text_model extends CI_Model {
		public function add($text, $type) {
			if ($this->db->insert('text', array('type' => $type, 'text' => $text)))
				return $this->db->insert_id();
			else return -1;
		}

		public function get($id) {
			$_result = $this->db->get_where('text', array('id' => $id));
			$_data = $_result->result();
			if (1 === sizeof($_data)) return $_data[0];
			else return null;
		}
	}
?>