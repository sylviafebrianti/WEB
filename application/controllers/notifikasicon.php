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
	//insert data
	
	public function kode(){
		$data['kodeunik'] = $this->notifikasimodel->kode_otomatis();
		$data= $this->notifikasimodel->GetTable('pemesanan');
		$this->load->view('pesanan', array('data'=>$data));
	}
	public function insert(){
		if(isset($_POST['submit'])){
			$this->load->model('notifikasimodel');
			$model = $this->notifikasimodel->kode_otomatis('pemesanan');
			$ID_PEMESANAN =$model;
			$BERAT_LAYANAN = $this->input->post('berat');
			$STATUS_PEMESANAN = $this->input->post('status');
			$data = array('ID_PEMESANAN'=>$ID_PEMESANAN, 'BERAT_LAYANAN'=>$BERAT_LAYANAN, 'STATUS_PEMESANAN'=>$STATUS_PEMESANAN);
			$this->notifikasimodel->input_data('pemesanan', $data);
			redirect('notifikasicon');
		}
		else {
			$this->load->view('pemesanan');
		}
	}

}
?>