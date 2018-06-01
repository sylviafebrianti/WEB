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
	public function update (){
		$ID_PEMESANAN = $this->input->post('ID_PEMESANAN');
	}
 public function pesanan(){
		$data['pesanan']=$this->notifikasimodel->tampil2();
		var_dump($data);
		$this->load->view('pesanan',$data);
		
	}
 
}
?>