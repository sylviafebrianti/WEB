<!DOCTYPE html>
<html>
	<head>
		<title>Demo Crud</title>
	</head>
	<body>
		<h2>Demo Crud</h2>
		<p><strong>Ubah Data</strong></p>
		
		<form action="create" method="post">
		<?php echo $model->labels['Kode']; ?><br/>
		<input type="text" name="Kode" size="10" maxlength="10" value="<?php echo $model->Kode; ?>"/><br/><br/>
		
		<?php echo $model->labels['Nama']; ?><br/>
		<input type="text" name="Nama" size="30" maxlength="25" value="<?php echo $model->Nama; ?>"/><br/><br/>
		
		<?php echo $model->labels['Harga']; ?><br/>
		<input type="text" name="Harga" size="10" maxlength="10" value="<?php echo $model->Harga; ?>"/><br/><br/>
		
		<?php echo $model->labels['Stok']; ?><br/>
		<input type="text" name="Stok" size="10" maxlength="10" value="<?php echo $model->Stok; ?>"/><br/><br/>
		
		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
			
		</form>
	</body>
</html>