<!DOCTYPE html>
<html>
<title>Laundry Hamazah</title>
<style>
	ul{
  list-style-type:none;
  margin:0;
  padding:0;
  overflow:hidden;
  width:20%;
  height: 100%;
  background-color:#4682B4;
  position:fixed;
  overflow:auto;
}
ul li a{
  display:block;
  color: #ffffff;
  padding:22px 42px;
  text-decoration:none;
  text-align: center;
  font-family: Trebuchet MS;
  font-size: 20px;
}
ul li.active a{
  background-color:#4169e1;
}
ul li:not(.active) a:hover{
  background:#6495ED;
  color:#fff;
}
div.content{
  margin-left:25%;
  padding: 1px 16px;
  height:1000px;
}
@media screen and (max-width:1024px){
  ul{
    width:100%;
    height:auto;
    position:relative;
  }
  ul li a{
    float:left;
    padding:15px;
  }
  div.content{
    margin-left:0;
  }
}
@media screen and (max-width:485px){
  ul li a{
    float:none;
    text-align:center;
  }
  }
.button{
       /*ubah warna background*/
        background-color: #B0E0E6;
       /*ubah warna teks*/
        color: white;
       /*hilangkan garis bawah pada teks*/
        text-decoration: none;
       /*teks rata tengah*/
        text-align: center;
       /*atur jarak margin/luar*/
        margin: 100px 50px;
        border-radius: 30px;
        margin-left: -70px;
        position: fixed;
       /*atur jarak padding/dalam*/
        padding: 30px 30px;
       /*ubah tampilan kursor*/
        cursor: pointer;
      }
.button2{
       /*ubah warna background*/
        background-color: #B0E0E6;
       /*ubah warna teks*/
        color: white;
       /*hilangkan garis bawah pada teks*/
        text-decoration: none;
       /*teks rata tengah*/
        text-align: center;
       /*atur jarak margin/luar*/
        margin: 100px 50px;
        border-radius: 30px;
        margin-left: 315px;
        position: fixed;
       /*atur jarak padding/dalam*/
        padding: 35px 35px;
       /*ubah tampilan kursor*/
        cursor: pointer;
      }
.button3{
       /*ubah warna background*/
        background-color: #B0E0E6;
       /*ubah warna teks*/
        color: white;
       /*hilangkan garis bawah pada teks*/
        text-decoration: none;
       /*teks rata tengah*/
        text-align: center;
       /*atur jarak margin/luar*/
        margin: 100px 800px;
        margin-left: 700px;
        border-radius: 30px;
        position: fixed;
       /*atur jarak padding/dalam*/
        padding: 30px 30px;
       /*ubah tampilan kursor*/
        cursor: pointer;
        /*membuat efek bayangan*/
      }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="background-color: aliceblue;>
<div class="w3-sidebar w3-bar-block" style="width:20%; color:#ffffff; background-color: #82b3d2">
  <ul>
  	<img style=" width: 85%; display:block; height: auto; padding: 20px 25px; margin-left: 20px;" src="<?php echo base_url(); ?>assets/img/eLaundry2.png">
  	
  <li class="active"><a href="#"><img style="width: 20%; height:20%; margin-right: 30px;" src="<?php echo base_url(); ?>assets/img/logo2.png">Beranda</a></li>
  
  <li><a href="<?php echo base_url()?>notifikasicon/index" rel="stylesheet" ><img style="width: 20%; height:20%; margin-right: 30px;" src="<?php echo base_url(); ?>assets/img/logo1.png">Transaksi</a></li>
  
  <li><a href="<?php echo base_url()?>pelanggan/index" rel="stylesheet" ><img style="width: 20%; height:20%; margin-right: 30px;" src="<?php echo base_url(); ?>assets/img/logo3.png">Customer</a></li>
  
  <li><a href="<?php echo base_url()?>loginlaundry/keluar" rel="stylesheet" ><img style="width: 20%; height:20%; margin-right: 30px;" src="<?php echo base_url(); ?>assets/img/logo5.png">Keluar</a></li>
  
  <li><a href="#">Help</a></li>
</ul>
</div>

<div style="margin-left:20%">

<div class="w3-container w3-blue">
  <h1>Welcome Laundry Hamazah</h1>
</div>

<div class="w3-container">
</br>
  
</div>

<div style="margin-left: 140px;">
<div class="button">
<a href="<?php echo base_url()?>layanan/index"><img src="<?php echo base_url(); ?>assets/img/layanan (2).png" width="200" height="200"/>
	</a>
</div>

<div class="button2">
<a href="<?php echo base_url()?>belajar_crud/index"><img src="<?php echo base_url(); ?>assets/img/parfum1.png" width="190" height="190"/></a>
</div>

<div class="button3">
<a href="<?php echo base_url()?>barang_satuan/index"><img src="<?php echo base_url(); ?>assets/img/barangsatuan.png" width="200" height="200"/></a>
</div>
</div>

</div>
      
</body>
</html>
