<?php

class Loginlaundry extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
		
	}
	public function ceklogin(){
		if(isset($_POST['btnSubmit'])){
			$this->load->model("model_login");
			$user = $this->input->post('user', true);
			$pass = $this->input->post('pass', true);
			$cek = $this->model_login->proseslogin($user,$pass);
			$hasil = count($cek);
			if ($hasil > 0){
				$_SESSION['login'] = true;
				redirect('loginlaundry/home');
			}else{
				$this->load->view('login_eror_view');
			}
		}else{
			redirect('loginlaundry');
		}
			
	}
	public function home(){
		if(isset($_SESSION['login'])){
			$this->load->view('halamanawal');
		}else{
			
		}
	}
	public function keluar(){
		$this->session->sess_destroy();
		redirect('loginlaundry');
	}
	
	/*
	public function index()
	{
		$this->load->model('Model_login');
		$model = $this->Model_login;
		
	if (isset($_POST['btnSubmit'])){
			$model->username = $_POST['Username'];
			$model->password = $_POST['Password'];
			
			if($model->aunthentikasi()){
				$this->load->view('login_seccess_view');
			}else{
				$this->load->view('login_eror_view');
			}
		}else{
			$this->load->view('login_view', ['model'=>'$model']);
		}
		}
		*/
	
}
?>