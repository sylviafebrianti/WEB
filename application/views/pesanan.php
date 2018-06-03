<html>
<head>
<title>Detail Transksi</title>
<style>
#kiri
{
width:50%;
height: 10px;
float:left;
margin-left: 40px;
}
#kanan
{
width:50%;
height:150px;
float:right;
margin-left: 200px;
}
input[type=text],
input[type=number],
input[type=date]
 {
    border: 1px solid #CCC;
    border-radius: 5px;
    padding: 10px;
    width: 230px;
    Margin-top: 5px;
    Margin-bottom: 5px;
}
select
 {
    border: 1px solid #CCC;
    border-radius: 5px;
    padding: 10px;
    width: 230px;
    Margin-top: 5px;
    Margin-bottom: 5px;
}
.tombol { 
   padding: 15px 25px;
   background: #9e5fcd;
   color: white;
   width: 50px;
   margin: 20px;
   border-radius: 5px;
   margin-left: 700px;
	top: 90%;
	left: 50%;
}

.tombol:hover {
   background: #cfcfc9;
}
form {
    overflow: hidden;
    padding: 20px;
}
 
label {
    float: left;
    width: 150px;
    padding-right: 45px;
    Margin-top: 13px;
    Margin-bottom: 13px;
}
#la{
	 padding-top: 20px;
     width: 1100px;
     height: 650px;
     background-color: #FAF0E6;
     border-radius: 30px;
     margin-left: auto;
     margin-right: auto;
     }
#baba{
	padding: 15px;
	margin-left: 20px;
}
#ini{
  width: 300px;
  height: 50px;
  padding: 5px 10px;
  
  
}
body {
     background:  url('<?php echo base_url('assets/img/lo.png'); ?>');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
	 
}
</style>
</head>
<body>
<center><h2>DETAIL TRANSAKSI</h2></center>
<?php foreach($pesanan as $row){?>
<form action="<?=base_url().'notifikasicon/update'?>" method="POST">
<div id="la">
<div id="baba">
    <input name="ID_PEMESANAN" type="text" value="<?php echo $row->ID_PEMESANAN;?>" readonly/>
    </br>
    <input name="NAMA_PETUGAS" type="text" value="<?php echo $row->NAMA_PEGAWAI;?>" readonly/>
    </br>
</div>


<div id="kiri">	
	<label class="first-name">Nama</label>
    <input name="nama" type="text" value="<?php echo $row->NAMA_PELANGGAN;?>" readonly/>
		</br>
	<label  class="first-name">Alamat</label>
    <input name="alamat" type="text" value="<?php echo $row->ALAMAT;?>" readonly/>
		</br>
	<label class="first-name">Nomer Handphone</label>
    <input name="nohp" type="text" value="<?php echo $row->NO_HP;?>"readonly/>
		</br>
		<label class="first-name">Nama Parfum</label>
		<input name="namaparfum" type="text" value="<?php echo $row->NAMA_PARFUM;?>"readonly/>
		
 <h3>Laundry Kiloan</h3>
 <label class="first-name">Layanan</label>
 <input name="layanan" type="text" value="<?php echo $row->JENIS_LAYANAN_CUCI;?>"readonly/>
     </br>
	<label class="first-name">Berat</label>
    <input name="berat" type="number" value="<?php echo $row->BERAT;?>"readonly/>
    </br>
	<label class="first-name">Harga</label>
    <input name="harga" type="text" value="<?php ?>">
 </div>
 </br>
 
 <div id="kanan">
	<label for="tglmasuk" class="first-name">Tanggal Masuk</label>
    <input name="tglmasuk" type="date" value="<?=$r['TGL_PEMESANAN']?>" ?>">
    </br>
	<label for="tglkeluar" class="first-name">Tanggal Keluar</label>
    <input name="tglkeluar" type="date" value="<?=$r['TGL_PENGIRIMAN']?>">
    </br>
    <label for="status" class="first-name">Status</label>
	<select name="status">
    <option value="proses"> Proses </option>
    <option value="selesai" selected> Selesai </option>
    </select>
 </div>


<div id="kanan">
</br>
    <h3>Laundry Satuan</h3>
 	<label for="layanan" class="first-name">Barang Satuan</label>
	<input name="layanan" type="text" placeholder="">
     </br>
	<label for="jumlah" class="first-name">Jumlah</label>
    <input name="jumlah" type="number" placeholder="Jumlah">
    </br>
	<label for="harga" class="first-name">Harga</label>
    <input name="harga" type="text" placeholder="Harga">
    <br>
    <label for="total" class="first-name">Total Harga</label>
    <input name="total" type="text" placeholder="Total">
 </div>
	</div>
	</br>
	<div id="ini">
		<td><input type="submit" name="submit" value="Simpan"></td>
	</div>
	
</form>
<?php } ?>
</body>
</html>