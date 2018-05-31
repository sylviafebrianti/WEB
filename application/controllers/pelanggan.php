<?php
class Pelanggan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('modelpelanggan');
	}
	public function index(){
		$data['pelanggan']=$this->modelpelanggan->getAllNews();
		$this->load->view('pelangganku',$data);
	}
}
?>