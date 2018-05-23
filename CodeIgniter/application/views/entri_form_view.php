<html>
<head>
<title>Demo Model</title>
</head>
<body>
<h2>Entri Data Sukses</h2>

<form action="http://localhost/CodeIgniter/index.php/entri" method="post">
<!--<php echo $model->labels['nim']; ?><br>-->
<input placeholder="NIM" type="text" name="nim"><br><br>

<!--<php echo $model->labels['nama']; ?><br>-->
<input placeholder="Nama" type="text" name="nama"><br><br>

<!--<php echo $model->labels['prodi']; ?><br>-->
<input placeholder="Program Studi" type="text" name="prodi"><br><br>

<input type="submit" name="Submit" value="Simpan">
</form>
</body>
</html>