<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sportovi extends CI_Controller {

	public function index() {
		$this->layout->view('sportovi/index');
	}
	public function kosarka() {
		$this->layout->view('sportovi/kosarka');
	}
	public function nogomet() {
		$this->load->model('sportovi/sportovimodel');
		$data = array( "korisnik" => $this->sportovimodel->dohvatiKorisnikeUTerminu(1) );
		
		$this->layout->view('sportovi/nogomet', $data);
	}
	public function odbojka() {
		$this->layout->view('sportovi/odbojka');
	}
}
