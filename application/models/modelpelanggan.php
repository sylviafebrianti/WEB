<?php
class Modelpelanggan extends CI_Model{
	function __cunstruct(){
		parent::__construct();
	}
	function getAllNews(){
		$q="SELECT * FROM pelanggan";
		return $this->db->query($q)->result();
	}
}
?>