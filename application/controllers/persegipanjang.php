<?php
class persegipanjang extends CI_Controller {
	public function index(){
		if(isset($_POST['Submit'])){
			$this->load->model('persegipanjang_model');
			$model = $this->persegipanjang_model;
		
		$panjang = $_POST['p'];
		$lebar = $_POST['l'];
		
		$model->set_panjang($panjang);
		$model->set_lebar($lebar);
		
		$this->load->view('persegipanjangview', array('model'=>$model));
		}else{
		$this->load->view('persegipanjangfromview');
		}
	
	}
	}
?>