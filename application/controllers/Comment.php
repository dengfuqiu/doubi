<?php
	class Comment extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('comment_model');
			$this->load->model('post_model');
		}
		
		public function publish() {
			$_userId = $this->session->userdata['id'];
			$_postId = $this->input->post('post');
			$_textId = $this->input->post('text-id');
			$_msg = '';
			if (0 === $this->comment_model->add($_userId, $_postId, $_textId)) {
				$this->post_model->comment($_postId);
				$_msg = '发布成功';
			} else $_msg = '发布失败';
			
			$this->load->view('template/header');
			$this->load->view('pages/message', array('msg' => $_msg));
			$this->load->view('template/footer');
		}
	}
?>