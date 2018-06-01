<html>
<head></head>
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
	width: 20x;
	height: 50px;
	position : fixed;
	top : 2%;
	left : 43%;
}
.button ul a{
	padding: 10px;
	background: #87CEFA;
	color: white;
	border-radius: 3px;
}
</style>
<body style="background-color:powderblue">
<p align="center"><div class="button">
<ul><a href="<?php echo base_url()?>layanan/insert">Tambah Data</a></ul></div></p>
</head>
<table border="1" class="tablezebra">
<tr>
<th>NO</th>
<th>ID</th>
<th>Jenis Layanan</th>
<th>Harga</th>
<th colspan='2'>Aksi</th>
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
<td><a href="<?=base_url('layanan/update/').$r['ID_LAYANAN'];?>"><img src="<?php echo base_url('assets/gambar/editnew.png') ?>" width="35" height="35"></a></td> 
<td><a href="<?=base_url().'layanan/delete/'.$r['ID_LAYANAN']?>"><img src="<?php echo base_url('assets/gambar/deletenew.png') ?>" width="30" height="33"></a></td>
</tr>

<?php
$no++;
}
?>

</table>
</html>