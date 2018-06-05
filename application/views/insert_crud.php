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
	width : 450px;
	height: 380px;
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
body{
	background: url('<?php echo base_url('assets/img/lo.png'); ?>');
	background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
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
<!--<tr>
	<td></td>
	<td></td>
	<td><a href="<?php echo base_url()?>belajar_crud">Kembali</a></td>-->
</form>
</table>
</div>
</body>
</html>

