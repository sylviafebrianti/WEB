<?php
class crud extends CI_Controller {
	public $model = NULL;
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Barang_model');
		$this->model=$this->Barang_model;
		$this->load->database();
		$this->load->helper('url');
		
	}
	public function index(){
		$this->model->read();
	}
	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->Kode=$_POST['Kode'];
			$this->model->Nama=$_POST['Nama'];
			$this->model->Harga=$_POST['Harga'];
			$this->model->Stok=$_POST['Stok'];
			$this->model->insert();
			redirect(base_url().'index.php/crud/read');
			
			
		}else{
			$this->load->view('CRUD/crud_create_view', ['model'=>$this->model]);
		}
	}
	public function read(){
		$rows = $this->model->read();
		$this->load->view ('CRUD/crud_read_view', ['rows'=>$rows]);
	}
	public function update($kode_up){
		if(isset($_POST['btnSubmit'])){
			$this->model->Kode=$_POST['Kode'];
			$this->model->Nama=$_POST['Nama'];
			$this->model->Harga=$_POST['Harga'];
			$this->model->Stok=$_POST['Stok'];
			$this->model->update();
			redirect ('index.php/crud/read');
			}else{
				$query = $this->db->query("SELECT * FROM barang WHERE kode='$kode_up'");
				$row = $query->row();
				$this->model->Kode = $row->Kode;
				$this->model->Nama = $row->Nama;
				$this->model->Harga = $row->Harga;
				$this->model->Stok = $row->Stok;
				$this->load->view ('CRUD/crud_update_view', ['model'=>$this->model]);
				}
			}
			
			public function delete ($kode_del){
				$this->model->Kode = $kode_del;
				$this->model->delete();
				redirect('index.php/crud/read');			
				}
			
}

?>