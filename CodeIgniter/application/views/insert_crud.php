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
	width: 230px;
	margin-top: 5px;
	margin-bottom: 5px;
}
</style>

<body>
<div class="body">

<h1><div class="h1">Data Parfum</div></h1>

<table align="center">


<form action="<?=base_url().'belajar_crud/insert'?>" method="POST">

<tr>
	<td>Nama Parfum</td>
	<td></td>
	<td><input type="text" name="NAMA_PARFUM"></td>
</tr>

<tr>
	<td>Deskripsi</td>
	<td></td>
	<td><input type="text" name="DESKRIPSI"></td>
	</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="submit" value="Simpan"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><a href="<?php echo base_url()?>belajar_crud">Kembali</a></td>
</form>
</table>
</div>
</body>
</html>

