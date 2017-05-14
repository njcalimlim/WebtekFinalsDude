<?php



class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function doLogin($username, $password)
	{
		$customer = $this->db->get_where('customer', ['UserName' => $username, 'Password' => $password])->result();
		$sp = $this->db->get_where('service_provider', ['Username' => $username, 'Password' => $password])->result();
		$result = [];

		foreach($customer AS $key => $value)
		{
			array_push($result, ['id' => $value->cuID, 'username' => $value->UserName, 'password' => $value->Password, 'type' => 'customer']);
		}
		foreach($sp AS $key => $value)
		{
			array_push($result, ['id' => $value->spID, 'username' => $value->Username, 'password' => $value->Password, 'type' => 'sp']);
		}
		return $result;
	}
}