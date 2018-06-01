<!DOCTYPE html>

<html lang="id">

<head>

      <meta charset="utf-8">

      <title>Data Pelanggan</title>
      
      <style>
		h1{
  font-family: sans-serif;
}

table {
  font-family: Arial, Helvetica;
  color: #3a473d;
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


body{
	background-color: #80daf0;
	background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
}
	</style>

</head>

<body >

      <center><h1>Daftar Pesanan Pelanggan </h1></center>

      <table align="center">
                  <tr>

                        <th>Id Pemesanan</th>

                        <th>Nama Petugas</th>

                        <th>Nama</th>
                        
                        <th>Alamat</th>
                        
                        <th>Nomer Hp</th>
                        
                        <th>Parfum</th>
                        
                        <th>Layanan</th>
                        
                        <th>Aksi</th>


                  </tr>

                  <?php

                        foreach($notifikasi as $row){?>
<tr>
	<td><?php echo $row-> ID_PEMESANAN;?></td>
	<td><?php echo $row-> NAMA_PEGAWAI;?></td>
	<td><?php echo $row-> NAMA_PELANGGAN;?></td>
	<td><?php echo $row-> ALAMAT;?></td>
	<td><?php echo $row-> NO_HP;?></td>
	<td><?php echo $row-> NAMA_PARFUM;?></td>
	<td><?php echo $row-> JENIS_LAYANAN_CUCI;?></td>
	<td align="center"><a href="<?php echo base_url()?>notifikasicon/pesanan" rel="stylesheet">Proses</a></td>	
</tr>
                  <?php } ?>


      </table>

</body>

</html>