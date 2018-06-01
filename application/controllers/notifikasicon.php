<?php
class Notifikasicon extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasimodel');
	}
	public function index(){
		$data['notifikasi']=$this->notifikasimodel->tampil2();
		$this->load->view('notifikasipel',$data);
	}
 public function pesanan(){
		$data['pesanan']=$this->notifikasimodel->tampil2();
		$this->load->view('pesanan',$data);
	}
 
}
?>