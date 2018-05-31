<?php
class entri extends CI_controller{
	public function index(){
		$this->load->model('mahasiswa_model');
		$model = $this->mahasiswa_model;
		if(isset($_POST['Submit'])){
			$model->nim = $_POST['nim'];
			$model->nama = $_POST['nama'];
			$model->prodi = $_POST['prodi'];
			$model->insert();
			$this->load->view('entri_respon_view',['model'=>$model]);
		}else{
			$this->load->view('entri_form_view',['model' =>$model]);
		}
	}
}
?>