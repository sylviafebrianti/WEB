<?php
class Detail extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasimodel');
	}
	public function index(){
		$data['pemesanan']=$this->notifikasimodel->tampil2($where, 'pemesanan');
		var_dump($data);
		$this->load->view('pesanan',$data);
	}
}

?>