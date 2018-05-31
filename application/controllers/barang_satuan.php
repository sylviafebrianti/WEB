<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_satuan extends CI_Controller {
	public function index(){
		$data['kodeunik'] = $this->mod->kode_otomatis();
		$data= $this->mod->GetTable('barang_satuan');
		$this->load->view('view_barang_satuan', array('data'=>$data));
	}
	public function insert(){
		if(isset($_POST['submit'])){
			$mod = $this->mod->kode_otomatis('barang_satuan');
			$ID_BARANG_SATUAN =$mod;
			$NAMA_BARANG_SATUAM = $this->input->post('NAMA_BARANG_SATUAM');
			$JENIS_BARANG_SATUAN = $this->input->post('JENIS_BARANG_SATUAN');
			$HARGA_BARANG_SATUAN = $this->input->post('HARGA_BARANG_SATUAN');
			$data = array('ID_BARANG_SATUAN'=>$ID_BARANG_SATUAN, 'NAMA_BARANG_SATUAM'=>$NAMA_BARANG_SATUAM, 'JENIS_BARANG_SATUAN'=>$JENIS_BARANG_SATUAN, 'HARGA_BARANG_SATUAN'=>$HARGA_BARANG_SATUAN);
			$this->mod->InsertData('barang_satuan', $data);
			redirect('barang_satuan');
		}
		else {
			$this->load->view('insert_barang_satuan');
		}
	}
	public function update(){
		if(isset($_POST['submit'])){
			$id = $_POST['old'];
			$ID_BARANG_SATUAN = $this->input->post('ID_BARANG_SATUAN');
			$NAMA_BARANG_SATUAM = $this->input->post('NAMA_BARANG_SATUAM');
			$JENIS_BARANG_SATUAN = $this->input->post('JENIS_BARANG_SATUAN');
			$HARGA_BARANG_SATUAN = $this->input->post('HARGA_BARANG_SATUAN');
			$data = array('ID_BARANG_SATUAN'=>$ID_BARANG_SATUAN, 'NAMA_BARANG_SATUAM'=>$NAMA_BARANG_SATUAM, 'JENIS_BARANG_SATUAN'=>$JENIS_BARANG_SATUAN, 'HARGA_BARANG_SATUAN'=>$HARGA_BARANG_SATUAN);
			$this->mod->UpdateData('barang_satuan', $data, $id);
			redirect('barang_satuan');
		}
		else {
			$id = $this->uri->segment(3);
			$data = $this->mod->getByID('barang_satuan','ID_BARANG_SATUAN', $id)->row_array();
			
			$this->load->view('update_barang_satuan', array('r'=>$data));
		}
	}
	public function delete(){
		$id = $this->uri->segment(3);
		$this->mod->DeleteData('barang_satuan','ID_BARANG_SATUAN',$id);
		redirect('barang_satuan');
	}
}
?>