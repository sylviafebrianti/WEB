<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pesanan</title>
	<style>
		h1{
  font-family: sans-serif;
}

table {
  font-family: Arial, Helvetica;
  color: #3a473d;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}

table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #77c6ce;
}

table th:first-child{  
  border-left:none;  
}

table tr {
  text-align: center;
  padding-left: 20px;
}

table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}

table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #ace8e7;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}


table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
	</style>
</head>
<body>
	<center><h1>Detail Pemesanan Customer</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Id_pemesanan</th>
			<th>Nama Pegawai</th>
			<th>Alamat</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_pelanggan ?></td>
			<td><?php echo $u->alamat ?></td>
			<td>
			    <?php echo anchor('crud1/update/'.$u->id_pemesanan,'Edit'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>