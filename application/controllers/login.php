<?php
class Login extends CI_Controller{
	public function index(){
		$this->load->model('User_model');
		$model = $this->User_model;
		
		if (isset($_POST['btnSubmit'])){
			$model->username = $_POST['username'];
			$model->password = $_POST['password'];
			
			if($model->aunthentikasi()){
				$this->load->view('login_seccess_view');
			}else{
				$this->load->view('login_eror_view');
				
				
				
				
			}
		}else{
			$this->load->view('login_form_view', ['model'=>'$model']);
		}
	}
}
?>
