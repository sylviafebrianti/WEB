<html>
<head>
<title>Detail Transksi</title>
<style>
#kiri
{
width:50%;
height:350px;
float:left;
}
#kanan
{
width:50%;
height:100px;
float:right;
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
	padding: 10px;
	margin-left: 10px;
}
#ini{
  width: 300px;
  height: 50px;
  padding: 5px 10px;
  
  
}
body {
     background: url('assets/img/lo.png');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
	 
}
</style>
<head>
<body>
<center><h2>DETAIL TRANSAKSI</h2></center>
<div id="la">
<div id="baba">

    <input name="nama" type="text" placeholder="Nomer Nota" >
    </br>
    <input name="nama" type="text" placeholder="Petugas">
    </br>
</div>



<div id="kiri">
	<form action="pesanan.php" method="post">
	<label for="nama" class="first-name">Nama</label>
    <input name="nama" type="text" placeholder="Nama">
		</br>
	<label for="alamat" class="first-name">Alamat</label>
    <input name="alamat" type="text" placeholder="Alamat">
		</br>
	<label for="nohp" class="first-name">Nomer Handphone</label>
    <input name="nohp" type="text" placeholder="Nomer Hp">
		</br>
		<label for="namaparfum" class="first-name">Nama Parfum</label>
    <select name="nama parfum" >
     <option value="Molto Black"> Molto Black </option>
     <option value="Molto Biru">Molto Biru</option>
     <option value="Bubble Gum" selected>Bubble Gum</option>
 </select>
 <h3>Laundry Kiloan</h3>
 <label for="layanan" class="first-name">Layanan</label>
    <select name="layanan" >
     <option value="cucikering"> Cuci Kering </option>
     <option value="cucisetrika"> Cuci Setrika </option>
     <option value="setrikasaja" selected>Setrika Saja</option>
     </select>
     </br>
	<label for="berat" class="first-name">Berat</label>
    <input name="berat" type="number" placeholder="Berat/kg">
    </br>
	<label for="harga" class="first-name">Harga</label>
    <input name="harga" type="text" placeholder="Harga">
 </div>
 </br>
 <div id="kanan">
	<label for="tglmasuk" class="first-name">Tanggal Masuk</label>
    <input name="tglmasuk" type="date" placeholder="Tanggal Masuk">
    </br>
	<label for="tglkeluar" class="first-name">Tanggal Keluar</label>
    <input name="tglkeluar" type="date" placeholder="Tanggal Keluar">
    </br>
    <label for="status" class="first-name">Status</label>
	<select name="status" >
    <option value="proses"> Proses </option>
    <option value="selesai" selected> Selesai </option>
    </select>
    
 </div>


<div id="kanan">
 </br>
</br>
</br>
</br>
</br>

    <h3>Laundry Satuan</h3>
 <label for="layanan" class="first-name">Layanan</label>
    <select name="barang" >
     <option value="cucikering"> Boneka </option>
     <option value="cucisetrika"> Selimut </option>
     <option value="setrikasaja" selected>Bedcover</option>
     </select>
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
		<a href="<?php echo base_url()?>pesananlaundry/kembali"  class="tombol">SIMPAN </a>
	</div>

	<div id="ini">
	<div>
		<a href="<?php echo base_url()?>pesananlaundry/kembali"  class="tombol">KEMBALI</a>
	</div>
	</<div>
		
</body>
</html>