<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mod extends CI_Model {
	public function kode_otomatis() {
		$query = $this->db->count_all_results('parfum');
			//$data = $query->row();
			$kode = $query+1;
		$kodemax = STR_PAD($kode,3,"0",STR_PAD_LEFT);
		$kodejadi = "P".$kodemax;
		return $kodejadi;
	}
	public function GetTable($tabel){
		$data=$this->db->get($tabel);
		return $data->result_array();
	}
	public function InsertData($tabel,$data){
		$res = $this->db->insert($tabel,$data);
		return $res;
	}
	public function UpdateData($tabel, $data, $id){
		$this->db->where('ID_PARFUM', $id);
		$res = $this->db->update($tabel, $data);
		return $res;
	}
	public function getByID($tabel, $pk, $id){
		$this->db->where($pk, $id);
		return $this->db->get($tabel);
	}
	public function DeleteData($tabel, $pk, $id){
		$this->db->where($pk, $id);
		$res = $this->db->delete($tabel);
		return $res;
	}
}
?>