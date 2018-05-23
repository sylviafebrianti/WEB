<html>
<head>
<style>
.tablezebra {
	font-family : sans-serif;
	color : #444;
	border-collapse : collapse;
	width : 75%;
	border: 1px solid #f2f5f7;
	position : fixed;
	top : 13%;
	left : 13%;
	border-radius: 25px;
}
.tablezebra tr th{
	background : #87CEFA;
	color: #fff;
	font-weight: normal;
}
.tablezebra, th, td {
	padding : 10px 25px;
	text-align : center;
}
.tablezebra tr:hover{
	background-color: #F0FFF0;
}
.tablezebra tr:nth-child(even){
	background-color: #fff;
}
.button{
	font-family : sans-serif;
	width: 100%
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
</style>
<p align="center"><div class="button">
<ul><a href="<?php echo base_url()?>layanan/insert">Tambah Data</a></ul></div></p>
</head>
<table border="1" class="tablezebra">
<tr>
<th>NO</th>
<th>ID</th>
<th>Jenis Layanan</th>
<th>Harga</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
foreach($data as $r) {
?>

<tr>
<td><?php echo $no ?></td>
<td><?php echo $r['ID_LAYANAN'] ?></td>
<td><?php echo $r['JENIS_LAYANAN_CUCI'] ?></td>
<td><?php echo $r['HARGA_LAYANAN_CUCI'] ?></td>
<td><a href="<?=base_url('layanan/update/').$r['ID_LAYANAN'];?>">Ubah</a> || <a href="<?=base_url().'layanan/delete/'.$r['ID_LAYANAN']?>">Hapus</a></td>
</tr>

<?php
$no++;
}
?>

</table>
</html>