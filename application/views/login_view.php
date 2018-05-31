<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
		body {
     color: #fff;
     background: url('assets/img/li.jpg');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
}
#example1 {
    border: #91f1f7;
    padding:35px;
    background:rgba(240, 248, 254, 0.7);
    border-radius: 30px;
    }
    
	</style>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php ?>css/css_login.css">
	
	<body>
		<div class = "container">
	<div class="wrapper">
	<div id="example1">
		<form action="<?php echo base_url('loginlaundry/ceklogin') ?>" method=POST> 
		  <center><img src="<?php echo base_url(); ?>assets/img/eLaundry2.png"></center> 
		    <h3 class="form-signin-heading">  </h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="user" placeholder="Username" required="" autofocus="" />
			  <input type="password" class="form-control" name="pass" placeholder="Password" required=""/>     		  
			  <center><button  name="btnSubmit" value="login" type="submit" class="btn-info btn-lg">Login</button></center> 			
		</form>	
		</div>		
	</div>
</div>
	</body>
	
</html>