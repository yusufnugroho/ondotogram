<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_medis extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function get($table)
	{
		return $this->db->get($table);
	}
}
