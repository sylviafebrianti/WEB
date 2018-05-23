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
	position: fixed;
	background-color: #E8F3F8;
	width : 40%;
	height: 350px;
	top : 20%;
	left : 30%;
}
.h1{
	text-align: center;
	font-size: 40px;
	color: steelblue; 
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
	width: 230px;
	margin-top: 5px;
	margin-bottom: 5px;
}
</style>

<body>
<div class="body">

<h1><div class="h1">Data Parfum</div></h1>

<table align="center">
<form action="<?=base_url().'index.php/layanan/update'?>" method="POST">
<tr>
	<td><input type="hidden" name="ID_LAYANAN" value="<?=$r['ID_LAYANAN']?>">
	<input type="hidden" name="old" value="<?=$r['ID_LAYANAN']?>" style="visibility:hidden">
	</td>
</tr>
<tr>
	<td>Jenis Layanan</td>
	<td>:</td>
	<td><input type="text" name="JENIS_LAYANAN_CUCI" value="<?=$r['JENIS_LAYANAN_CUCI']?>"></td>
</tr>
<tr>
	<td>Harga</td>
	<td>:</td>
	<td><input type="text" name="HARGA_LAYANAN_CUCI" value="<?=$r['HARGA_LAYANAN_CUCI']?>"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="submit" value="Simpan"></td>
</tr>

</form>
</table>
</html>