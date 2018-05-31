<!DOCTYPE html>
<html>
	<head>
		<title>Demo Crud</title>
	</head>
	<body>
		<h2>Demo Crud</h2>
		<p><a href="create">Tambah Data</a></p>
		<table border="1">
			<tr>
				<th width="100"> Kode</th>
				<th width="100">Nama</th>
				<th width="100">Harga</th>
				<th width="100">Stok</th>
			</tr>
			<?php
			foreach ($rows as $row){
				?>
				<tr>
					<td><?php echo $row->Kode; ?></td>
					<td><?php echo $row->Nama; ?></td>
					<td><?php echo $row->Harga; ?></td>
					<td><?php echo $row->Stok; ?></td>
					<td align="center"><a href="update/<?php echo $row->Kode; ?>">Ubah</a>
					<a href="delete/<?php echo $row->Kode; ?>">Hapus</a></td>
				</tr>
				<?php
			}
			?>
		</table>
	</body>
</html>
