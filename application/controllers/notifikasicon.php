<?php
class Notifikasicon extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasimodel');
	}
	public function index(){
		$data['notifikasi']=$this->notifikasimodel->tampil2();
		$this->load->view('notifikasipel',$data);
	}
	public function update (){
		$ID_PEMESANAN = $this->input->post('ID_PEMESANAN');
	}
 public function pesanan(){
		$data['pesanan']=$this->notifikasimodel->tampil2();
		$this->load->view('pesanan',$data);
	}
	function tambah(){
    $data = array(
        'TGL_PEMESANAN'		=> $this->input->post('TGL_PEMESANAN'),
        'TGL_PENGANTARAN'	=> $this->input->post('TGL_ENGANTARAN')
    );
    $this->notifikasimodel->tambah($data);
    redirect('notifikasicon');
}

}
?>