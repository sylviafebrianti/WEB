<html>
<head>
<title>Latihan Model</title>
</head>
<body>
	<h1>Model Persegi Panjang</h1>
	
	Nilai Panjang: <?php echo $model->get_panjang(); ?></br>
	Nilai Lebar: <?php echo $model->get_lebar(); ?></br>
	
	Luas Persegi Panjang: <?php echo $model->hitung_luas(); ?></br>
	Keliling Persegi Panjang: <?php echo $model->hitung_keliling(); ?></br>
</body>
</html>