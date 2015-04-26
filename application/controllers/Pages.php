<?php
	class Pages extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('post_model');
			$this->load->model('text_model');
			$this->load->model('comment_model');
		}
		
		public function index() {
			$_hotPosts = $this->post_model->getHot(10);
			$_boardOnePosts = $this->post_model->getBoardHot(1, 2);
			$_boardTwoPosts = $this->post_model->getBoardHot(2, 2);
			$_boardThreePosts = $this->post_model->getBoardHot(3, 2);
			$this->load->view('template/header');
			$this->load->view('pages/index',  array('hot' => $_hotPosts, 'boardOne' => $_boardOnePosts, 
				'boardTwo' => $_boardTwoPosts, 'boardThree' => $_boardThreePosts));
			$this->load->view('template/footer');
		}

		public function login(){
			$this->load->view('template/header');
			$this->load->view('pages/login');
			$this->load->view('template/footer');
		}
		
		public function register() {
			$this->load->view('template/header');
			$this->load->view('pages/register');
			$this->load->view('template/footer');
		}
		
		public function board() {
			
		}
		
		public function publish() {
			$this->load->view('template/header');
			$this->load->view('template/re');
			$this->load->view('pages/publish');
			$this->load->view('template/footer');
		}
		
		public function post($id) {
			$_post = $this->post_model->get($id);
			$_comments = $this->comment_model->getAll($id);
			$_cmts = array();
			foreach ($_comments as $c) {
				$_text = $this->text_model->get($c->text_id);
				array_push($_cmts, array('id' => $c->id, 'user_id' => $c->user_id, 'text' => $_text->text));
			}
			$this->post_model->view($id);
			$_text = $this->text_model->get($_post->text_id);
			$this->load->view('template/header');
			$this->load->view('template/re');
			$this->load->view('pages/post_view', array('post' => $_post, 'text' => $_text, 'comments' => $_cmts));
			$this->load->view('template/footer');
		}
	}

?>