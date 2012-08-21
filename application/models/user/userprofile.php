<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Userprofile extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
	function getUserById($id)
	{
		$ret = $this->db->query("SELECT * from users
			LEFT JOIN user_profiles on users.id = user_profiles.user_id
			where users.id = $id");
		return $ret->result();
	}
	
	function updateProfile($data) 
	{
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('user_profiles', $data); 
	}
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */