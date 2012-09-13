<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sportovimodel extends CI_Model
{

	function __construct()
	{
			parent::__construct();
	}
	
	function dohvatiKorisnikeUTerminu($id)
	{
		$ret = $this->db->query("select 
				user_profiles.ime, 
				user_profiles.prezime  from users_in_termini
				left join user_profiles on users_in_termini.user_id = user_profiles.user_id
				where termin_id = $id");
		return $ret->result();
	}
	
	function getTerminBySportName($name)
	{
		$ret = $this->db->query("SELECT termini.*,
			(select count(*) from users_in_termini
				where termin_id = termini.id) as 'popunjenost'
			FROM `termini`
			left join sportovi on sportovi.id = termini.sport_id
			where naziv = '$name' order by datum");
		return $ret->result();
	}
	
	function addUserToTermin($user_id, $termin_id)
	{
		$rez = $this->db->query("select * from users_in_termini
			where user_id = $user_id and termin_id = $termin_id
		");
		$data = array( "termin_id" => $termin_id,
			"user_id" => $user_id
		);
		$r = $rez->result();

		if( empty($r) )
			$this->db->insert("users_in_termini", $data);
	}
	
	public function sendMail( $termin_id ) {
		$this->load->library('email');
		$this->email->from('davor@gmail.com', 'Davor Leipold');
		
		$ret = $this->db->query("select users.email 
					from users_in_termini
					left join users on users.id = users_in_termini.user_id
					where termin_id = $termin_id");
		
		$ret = $ret->result();
		
		foreach( $ret as $igrac) {
			$this->email->to($igrac->email); 
			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');	
			$this->email->send();
		}
	}
	
	public function isTerminFilled( $termin_id ) {
		$ret = $this->db->query("select count(*) as 'trenutni_broj' from users_in_termini
				where termin_id = $termin_id");
		$trenutni_broj_igraca = $ret->result_array();
		$trenutni_broj_igraca = $trenutni_broj_igraca[0]['trenutni_broj'];
		
		$ret = $this->db->query("select min_broj_igraca from termini
							where id = $termin_id");
							
		$min_broj_igraca = $ret->result_array();
		$min_broj_igraca = $min_broj_igraca[0]['min_broj_igraca'];
		
		if( $trenutni_broj_igraca > $min_broj_igraca)
			return 1;
		elseif ( $trenutni_broj_igraca == $min_broj_igraca)
			return 0;
		else
		  return -1;
	}

}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */