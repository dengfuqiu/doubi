<?php
	class User extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('user_model');
		}

		public function register() {
			$_username = $this->input->post('username');
			$_pwd = $this->input->post('pwd');
			$_repwd = $this->input->post('repwd');
			$this->load->view('template/header');
			
			if ($_pwd != $_repwd)
				$this->load->view('pages/message', array('msg'=>'两次输入密码不一致'));
			else {
				if (0 === $this->user_model->add($_username, $_pwd)) {
					$this->load->view('pages/message', array('msg'=>'注册成功'));
				} else {
					$this->load->view('pages/message', array('msg'=>'注册失败'));
				}
			}
			$this->load->view('template/footer');
		}
		
		public function login() {
			$_username = $this->input->post('username');
			$_pwd = $this->input->post('pwd');
			
			$_result = $this->user_model->get($_username, $_pwd);
			$_msg = '';
			if (1 == sizeof($_result)) {
				$this->session->set_userdata($_result[0]);
				header("Location: http://localhost/doubi");
			} else {
				$_msg = "登录失败";
			}
			$this->load->view('template/header.php');
			$this->load->view('pages/message.php', array('msg' => $_msg));
			$this->load->view('template/footer');
		}
		
		public function logout() {
			$this->session->sess_destroy();
			header("Location: http://localhost/doubi");
		}
	}
	
?>