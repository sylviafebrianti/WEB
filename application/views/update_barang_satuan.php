<html>
<head></head>
<style>
.button{
	font-family : sans-serif;
	width: 100%;
	height: 50px;
	position : fixed;
	top : 2%;
	left : 43%;
}
.button ul a{
	padding: 10px;
	background: #F0FFF0;
	color: #3399FF;
	border-radius: 3px;
}
.body{
	font-family: sans-serif;
	font-size: 20px;
	position: absolute;
	width : 500px;
	height: 420px;
	top : 50%;
	left : 50%;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	background: rgba(0,0,0,.20);
	border-radius: 5px;
}
.h1{
	text-align: center;
	font-size: 40px;
	color: lightblue; 
	padding: 10px;
	top: 20%;
}
.form{
	margin: 20px auto;
	width: 320px;
	color: steelblue;
}
input{
	border: 1px solid #CCC;
	border-radius: 5px;
	padding: 10px;
	width: 240px;
	margin-top: 15px;
	margin-bottom: 5px;
}
img {
	background-size: cover;
	width: 1500px;
	height: 715px;
}
</style>

<body>
<img src="<?php echo base_url('assets/gambar/background.jpeg') ?>">
<div class="body">
<h1><div class="h1">Data Barang Satuan</div></h1>

<table align="center">
<form action="<?=base_url().'index.php/barang_satuan/update'?>" method="POST">
<tr>
	<td><input type="hidden" name="ID_BARANG_SATUAN" value="<?=$r['ID_BARANG_SATUAN']?>">
	<input type="hidden" name="old" value="<?=$r['ID_BARANG_SATUAN']?>" style="visibility:hidden">
	</td>
</tr>
<tr>
	<td>Nama Barang</td>
	<td></td>
	<td><input type="text" name="NAMA_BARANG_SATUAM" value="<?=$r['NAMA_BARANG_SATUAM']?>"></td>
</tr>
<tr>
	<td>Ukuran Barang</td>
	<td></td>
	<td><input type="text" name="JENIS_BARANG_SATUAN" value="<?=$r['JENIS_BARANG_SATUAN']?>"></td>
</tr>
<tr>
	<td>Harga</td>
	<td></td>
	<td><input type="text" name="HARGA_BARANG_SATUAN" value="<?=$r['HARGA_BARANG_SATUAN']?>"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="submit" value="Simpan"></td>
</tr>

</form>
</table>
</html>