<!DOCTYPE html>
<html>
	<head>
		<title>Demo Crud</title>
	</head>
	<body>
		<h2>Demo Crud</h2>
		<p><strong>Tambah Data</strong></p>
		<form action="create" method="post">
		<?php echo $model->labels['Kode']; ?><br/>
		<input type="text" name="Kode" size="10" maxlength="10"/><br/><br/>
		
		<?php echo $model->labels['Nama']; ?><br/>
		<input type="text" name="Nama" size="30" maxlength="25"/><br/><br/>
		
		<?php echo $model->labels['Harga']; ?><br/>
		<textarea name="Harga"></textarea><br/><br/>
		
		<?php echo $model->labels['Stok']; ?><br/>
		<textarea name="Stok"></textarea><br/><br/>
		
		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
			
		</form>
	</body>
</html>