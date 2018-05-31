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


table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
body{
	background: url('assets/img/lo.png');
	background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
}
	</style>

</head>

<body >

      <center><h1>Data Pelanggan </h1></center>

      <table align="center">
                  <tr>

                        <th>Id Pelanggan</th>

                        <th>Nama Pelanggan</th>

                        <th>Alamat</th>

                        <th>No Hp</th>
                        
                        <th>Username</th>
                        
                        <th>Password</th>

                  </tr>

                  <?php

                        foreach($pelanggan as $row){?>
<tr>
	<td><?php echo $row-> ID_PELANGGAN;?></td>
	<td><?php echo $row-> NAMA_PELANGGAN;?></td>
	<td><?php echo $row-> ALAMAT;?></td>
	<td><?php echo $row-> NO_HP;?></td>
	<td><?php echo $row-> USERNAME_PELANGGAN;?></td>
	<td><?php echo $row-> PASSWORD_PELANGGAN;?></td>
</tr>


                  <?php } ?>


      </table>

</body>

</html>