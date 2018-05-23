<?php
class hello extends CI_Controller{
	public function index(){
		//echo "<h2>Hello World CI!</h2>";
		
		//$this->load->view('helloview');
		
		$this -> load->model('hello_model'); 
		
		$model = $this->hello_model;
		
		$a = $model->txt;
		
		$data['teks'] = $a;
		
		$this->load->view('helloview', $data);
	}
}
?>