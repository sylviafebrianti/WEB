<?php
class Detail extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasimodel');
	}
	public function index(){
		$where = array('ID_PEMESANAN' => $ID_PEMESANAN);
		$data['pemesanan']=$this->notifikasimodel->tampil2($where, 'pemesanan')->result();
		$this->load->view('pesanan',$data);
	}
}
?>