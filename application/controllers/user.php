<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index() {
		$this->layout->view('user/index');
	}

	public function podaci() {
		$this->layout->view('user/podaci');
	}

	public function prijave() {
		$this->layout->view('user/prijave');
	}
	public function registracija() {
		$this->layout->view('user/registracija');
	}
	
}
