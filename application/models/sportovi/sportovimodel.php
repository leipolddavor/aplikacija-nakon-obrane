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
	

}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */