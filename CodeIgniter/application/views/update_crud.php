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
.lala{
	background: url('gambar/background.jpeg');
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
body{
	background: url(assets/gambar/background.jpeg);
	background-size: cover;
}
</style>

<body>
<div class="lala">

<h1><div class="h1">Data Parfum</div></h1>

<table align="center">
<form action="<?=base_url().'index.php/belajar_crud/update'?>" method="POST">
<tr>
	<td><input type="hidden" name="ID_PARFUM" value="<?=$r['ID_PARFUM']?>">
	<input type="hidden" name="old" value="<?=$r['ID_PARFUM']?>" style="visibility:hidden">
	</td>
</tr>
<tr>
	<td>Nama Parfum</td>
	<td></td>
	<td><input type="text" name="NAMA_PARFUM" value="<?=$r['NAMA_PARFUM']?>"></td>
</tr>
<tr>
	<td>Deskripsi</td>
	<td></td>
	<td><input type="text" name="DESKRIPSI" value="<?=$r['DESKRIPSI']?>"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="submit" value="Simpan"></td>
</tr>

</form>
</table>
</body>
</html>