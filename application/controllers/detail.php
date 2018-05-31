<?php
class Detail extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasimodel');
	}
	public function index(){
		$data['notifikasi']=$this->notifikasimodel->tampil2();
		$this->load->view('lala',$data);
	}
}
?>