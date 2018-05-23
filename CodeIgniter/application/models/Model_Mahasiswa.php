<?php
class Model_Mahasiswa extends CI_Model {
	
	function get_table(){
        return $this->db->get("tm_mahasiswa");
    }
	
	function search($data){
		$query = $this->db->query("SELECT * FROM (SELECT tm_mahasiswa.nim, tm_mahasiswa.nama, tm_prodi.prodi, tm_gol.golongan FROM tm_mahasiswa, tm_prodi, tm_gol WHERE tm_mahasiswa.tm_prodi_id=tm_prodi.id AND tm_mahasiswa.tm_gol_id=tm_gol.id) AS cari WHERE cari.nama='$data'");
		return $query->result();
	}
	
	function get_data_user(){
		$query = $this->db->query("SELECT * FROM user");
		return $query->result();
	}
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM tm_mahasiswa, tm_gol, tm_prodi WHERE tm_gol.id=tm_mahasiswa.tm_gol_id AND tm_prodi.id=tm_mahasiswa.tm_prodi_id");
		return $query->result();
	}
	
	function get_prodi(){
		$query = $this->db->query("SELECT * FROM tm_prodi");
		return $query->result();
	}
	
	function get_gol(){
		$query = $this->db->query("SELECT * FROM tm_gol");
		return $query->result();
	}
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM tm_mahasiswa WHERE nim = '$id'");
		return $query->result_array();
	}
	
	function input($data = array()){
		return $this->db->insert('tm_mahasiswa',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
	
	function delete($id){
		$this->db->where('nim', $id);
        return $this->db->delete('tm_mahasiswa');
	}
	
	function update($data = array(),$id){
		$this->db->where('nim',$id);
		return $this->db->update('tm_mahasiswa',$data);
	}
}