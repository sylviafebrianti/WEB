<?php
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('pemesanan');
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
}
function update_data($id,$data,$table){
		$this->db->where('$id_pakaian', $id);
		$res = $this->db->update($table, $data);
		return $res;
	}
}
function getByID($table, $pk, $id){
	$this->db->where($pk, $id);
	return $this->db->get($table);
	
}
?>