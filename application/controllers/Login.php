<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	}

	public function index()
	{
		if (isset($_POST['btn_login'])){
				$username = $_POST['txt_user'];
				$password = $_POST['txt_pass'];
				$notif = $this->MLogin->GoLogin($username,$password);
				if($notif){
					$this->load->library('session');
					$this->session->set_userdata('Login','OnLogin');
					redirect(site_url('Welcome'));
				}			
				else{
					$this->load->library('session');
					$this->session->unset_userdata('Login');
					redirect(site_url('Login'));
				}
			}

		$this->load->view('VLogin');
	}

}