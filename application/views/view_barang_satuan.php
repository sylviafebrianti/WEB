<html>
<head>
<style>
.tablezebra {
	font-family : sans-serif;
	color : #444;
	border-collapse : collapse;
	width : 75%;
	border: 1px solid #f2f5f7;
	border-radius: 25px;
	margin : auto;
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
	text-decoration: none;
}
.button ul a{
	padding: 10px;
	background: #87CEFA;
	color: white;
	border-radius: 3px;
}
</style>
</head>
<body style="background-color:powderblue; padding : 30px; text-align : center">
<p align="center"><div class="button">
<ul><a href="<?php echo base_url()?>barang_satuan/insert">Tambah Data</a></ul></div></p>

<table border="1" class="tablezebra">
<tr>
<th>NO</th>
<th>ID</th>
<th>Nama Barang</th>
<th>Ukuran Barang</th>
<th>Harga</th>
<th colspan='2'>Aksi</th>
</tr>

<?php
$no=1;
foreach($data as $r) {
?>



<tr>
<td><?php echo $no ?></td>
<td><?php echo $r['ID_BARANG_SATUAN'] ?></td>
<td><?php echo $r['NAMA_BARANG_SATUAM'] ?></td>
<td><?php echo $r['JENIS_BARANG_SATUAN'] ?></td>
<td><?php echo $r['HARGA_BARANG_SATUAN'] ?></td>
<td><a href="<?=base_url('barang_satuan/update/').$r['ID_BARANG_SATUAN'];?>"><img src="<?php echo base_url('assets/img/editnew.png') ?>" width="35" height="35"></a></td>
<td><a href="<?=base_url().'barang_satuan/delete/'.$r['ID_BARANG_SATUAN']?>"><img src="<?php echo base_url('assets/img/deletenew.png') ?>" width="30" height="33"></a></td>
</tr>



<?php
$no++;
}
?>

</table>
<p align="left" style="padding: 5px;"><div class="button">
<ul><a href="<?php echo base_url()?>loginlaundry/home">Kembali</a></ul></div></p>
</body>
</html>