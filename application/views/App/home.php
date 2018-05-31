<html>
	<head>
		<title>
			Home APP
		</title>
	</head>
	<body>
		<p align="center"><h2 align="center">Halaman Home</h2></p>
		<p align="center"><a href="<?php echo base_url()?>Mahasiswa/home"> Masuk </a></p>
		
		<form method="get" action="<?=site_url('Mahasiswa/home')?>">
		<p align="center"><input type="text" name="username">
		<p align="center"><input type="password" name="password">
		<input type="submit" name="btnMasuk" value="Masuk">
		</form>
	</body>
</html>