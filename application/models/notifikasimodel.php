<?php
class Notifikasimodel extends CI_Model{
	function __cunstruct(){
		parent::__construct();
	}
	
	function tampil(){
		$q="SELECT pemesanan.ID_PEMESANAN, pelanggan.NAMA_PELANGGAN, pelanggan.ALAMAT FROM pemesanan, pelanggan WHERE pemesanan.ID_PELANGGAN=pelanggan.ID_PELANGGAN";
		return $this->db->query($q)->result();
	}
	
 function tampil2(){
 	$q="SELECT pemesanan.ID_PEMESANAN, pemesanan.BERAT_LAYANAN, pemesanan.TOTAL_HARGA_LAYANAN, pemesanan.TOTAL_HARGA_BARANG_SATUAN, pemesanan.JUMLAH_BARANG_SATUAN, pegawai.NAMA_PEGAWAI, pelanggan.NAMA_PELANGGAN, pelanggan.ALAMAT, pelanggan.NO_HP, parfum.NAMA_PARFUM, layanan_cuci.JENIS_LAYANAN_CUCI FROM pemesanan JOIN pegawai ON pemesanan.ID_PEGAWAI=pegawai.ID_PEGAWAI JOIN pelanggan ON pemesanan.ID_PELANGGAN=pelanggan.ID_PELANGGAN JOIN parfum ON pemesanan.ID_PARFUM=parfum.ID_PARFUM JOIN layanan_cuci ON pemesanan.ID_LAYANAN=layanan_cuci.ID_LAYANAN JOIN barang_satuan";
 	return $this->db->query($q)->result();
 }
 function tambah($data){
    $this->db->insert('coba', $data);
    return TRUE;
}

}
?>