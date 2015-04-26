<?
	class Post extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('post_model');
			$this->load->model('text_model');
		}
		
		public function publish() {
			$_title = $this->input->post('title');
			$_userId = $this->session->userdata['id'];
			$_board = $this->input->post('board');
			$_textId = $this->input->post('text-id');
			$this->load->view('template/header');
			if (0 === $this->post_model->add($_userId, $_board, $_title, $_textId)) {
				$this->load->view('pages/message.php', array('msg' => '发布成功'));
			} else {
				$this->load->view('pages/message.php', array('msg' => '发布失败'));
			}
			$this->load->view('template/footer'); 
		}

		public function save() {
			$_text = $this->input->post('text');
			$_textId = $this->text_model->add($_text, 1);
			if (-1 === $_textId) echo json_encode(array('error' => 1));
			else echo json_encode(array('error' => 0, 'text_id' => $_textId));
		}
	}
	
?>