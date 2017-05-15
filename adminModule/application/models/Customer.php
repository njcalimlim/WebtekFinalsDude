<?php

class Customer extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function getCustomers(){
		return $this->db->get('customer')->result();
	}
}