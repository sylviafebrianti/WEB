<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_crud extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mod');
	}
	public function index(){
		$data['kodeunik'] = $this->mod->kode_otomatis();
		$data= $this->mod->GetTable('parfum');
		$this->load->view('view_crud', array('data'=>$data));
	}
	public function insert(){
		if(isset($_POST['submit'])){
			$this->load->model('mod');
			$mod = $this->mod->kode_otomatis('parfum');
			$ID_PARFUM =$mod;
			$NAMA_PARFUM = $this->input->post('NAMA_PARFUM');
			$DESKRIPSI = $this->input->post('DESKRIPSI');
			$data = array('ID_PARFUM'=>$ID_PARFUM, 'NAMA_PARFUM'=>$NAMA_PARFUM, 'DESKRIPSI'=>$DESKRIPSI);
			$this->mod->InsertData('parfum', $data);
			redirect('belajar_crud');
		}
		else {
			$this->load->view('insert_crud');
		}
	}
	public function update(){
		if(isset($_POST['submit'])){
			$id = $_POST['old'];
			$ID_PARFUM = $this->input->post('ID_PARFUM');
			$NAMA_PARFUM = $this->input->post('NAMA_PARFUM');
			$DESKRIPSI = $this->input->post('DESKRIPSI');
			$data = array('ID_PARFUM'=>$ID_PARFUM, 'NAMA_PARFUM'=>$NAMA_PARFUM, 'DESKRIPSI'=>$DESKRIPSI);
			$this->mod->UpdateData('parfum', $data, $id);
			redirect('belajar_crud');
		}
		else {
			$id = $this->uri->segment(3);
			$data = $this->mod->getByID('parfum','ID_PARFUM', $id)->row_array();
			
			$this->load->view('update_crud', array('r'=>$data));
		}
	}
	public function delete(){
		$id = $this->uri->segment(3);
		$this->mod->DeleteData('parfum','ID_PARFUM',$id);
		redirect('belajar_crud');
	}
}
?>