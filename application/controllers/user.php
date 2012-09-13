<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index() {
		$this->layout->view('user/index');
	}

	public function podaci() {
		if (!$this->tank_auth->is_logged_in()) {							// not logged in or activated
			redirect('/auth/login/');
		} else {
			$this->load->model("user/userprofile");
			$podaci = $this->userprofile;
			
			//podaci za trenutno logiranu osobu
			$user_id = $this->session->userdata['user_id'];
			$podaci = $podaci->getUserById($user_id);
			$data = array("podaci" =>  $podaci[0]);
			$this->layout->view('user/podaci', $data);
		}
	}

	public function prijave() {
		if (!$this->tank_auth->is_logged_in()) {							// not logged in or activated
			redirect('/auth/login/');

		} else {
			$this->layout->view('user/prijave');
		}
	}
	public function registracija() {
		$this->layout->view('user/registracija');
	}
	
}
