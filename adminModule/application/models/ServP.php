<?php

class ServP extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function getServP(){
		return $this->db->get('service_provider')->result();
	}
}