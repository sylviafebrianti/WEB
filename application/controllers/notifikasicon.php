<?php
class Notifikasicon extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasimodel');
	}
	public function index(){
		$data['notifikasi']=$this->notifikasimodel->tampil();
		$this->load->view('notifikasipel',$data);
	}
	function edit_pelanggan($ID_PELANGGAN){
  $where = array('id' => $ID_PELANGGAN);
  $data['pelanggan'] = $this->datasiswa->edit_datasiswa($where,'siswa')->result();
  $this->load->view('pesanan',$data);
 }
}
?>