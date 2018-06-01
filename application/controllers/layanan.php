<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	public function index(){
		$data['kodeunik'] = $this->mod1->kode_otomatis();
		$data= $this->mod1->GetTable('layanan_cuci');
		$this->load->view('view_layanan', array('data'=>$data));
	}
	public function insert(){
		if(isset($_POST['submit'])){
			$mod = $this->mod1->kode_otomatis('layanan_cuci');
			$ID_LAYANAN =$mod;
			$JENIS_LAYANAN_CUCI = $this->input->post('JENIS_LAYANAN_CUCI');
			$HARGA_LAYANAN_CUCI = $this->input->post('HARGA_LAYANAN_CUCI');
			$data = array('ID_LAYANAN'=>$ID_LAYANAN, 'JENIS_LAYANAN_CUCI'=>$JENIS_LAYANAN_CUCI, 'HARGA_LAYANAN_CUCI'=>$HARGA_LAYANAN_CUCI);
			$this->mod1->InsertData('layanan_cuci', $data);
			redirect('layanan');
		}
		else {
			$this->load->view('insert_layanan');
		}
	}
	public function update(){
		if(isset($_POST['submit'])){
			$id = $_POST['old'];
			$ID_LAYANAN = $this->input->post('ID_LAYANAN');
			$JENIS_LAYANAN_CUCI = $this->input->post('JENIS_LAYANAN_CUCI');
			$HARGA_LAYANAN_CUCI = $this->input->post('HARGA_LAYANAN_CUCI');
			$data = array('ID_LAYANAN'=>$ID_LAYANAN, 'JENIS_LAYANAN_CUCI'=>$JENIS_LAYANAN_CUCI, 'HARGA_LAYANAN_CUCI'=>$HARGA_LAYANAN_CUCI);
			$this->mod1->UpdateData('layanan_cuci', $data, $id);
			redirect('layanan');
		}
		else {
			$id = $this->uri->segment(3);
			$data = $this->mod1->getByID('layanan_cuci','ID_LAYANAN', $id)->row_array();
			
			$this->load->view('update_layanan', array('r'=>$data));
		}
	}
	public function delete(){
		$id = $this->uri->segment(3);
		$this->mod1->DeleteData('layanan_cuci','ID_LAYANAN',$id);
		redirect('layanan');
	}
}
?>