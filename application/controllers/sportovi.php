<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sportovi extends CI_Controller {

	public function index() {
		$this->layout->view('sportovi/index');
	}
	public function kosarka() {
		$this->load->model('sportovi/sportovimodel');
		$data = array( "korisnik" => $this->sportovimodel->dohvatiKorisnikeUTerminu(1),
			"termini" => $this->sportovimodel->getTerminBySportName("Kosarka")
		);
		
		$this->layout->view('sportovi/sportovi', $data);
	}
	public function nogomet() {
		$this->load->model('sportovi/sportovimodel');
		$data = array( "korisnik" => $this->sportovimodel->dohvatiKorisnikeUTerminu(1),
			"termini" => $this->sportovimodel->getTerminBySportName("Nogomet")
		);
		
		$this->layout->view('sportovi/sportovi', $data);
	}
	public function odbojka() {
		$this->load->model('sportovi/sportovimodel');
		$data = array( "korisnik" => $this->sportovimodel->dohvatiKorisnikeUTerminu(1),
			"termini" => $this->sportovimodel->getTerminBySportName("Odbojka")
		);
		
		$this->layout->view('sportovi/sportovi', $data);
	}
	
	public function prijavautermin($termin_id) {
			$this->load->model('sportovi/sportovimodel');
			$this->sportovimodel->sendMail($termin_id);
	
	
			//provjeri popunjetost
			//ako ima slobodnih mjesta
			$this->load->model('sportovi/sportovimodel');

			$user_id = $this->session->userdata['user_id'];
			$this->sportovimodel->addUserToTermin($user_id, $termin_id);
			
			if( $this->sportovimodel->isTerminFilled( $termin_id) == 0) {
				$this->sportovimodel->sendMail($termin_id);
			}
	}
	
	public function getdetails($termin_id) {
			$this->load->model('sportovi/sportovimodel');
			$data = array( "korisnik" => $this->sportovimodel->dohvatiKorisnikeUTerminu($termin_id));
			$this->load->view('sportovi/getdetails', $data);
	}
}