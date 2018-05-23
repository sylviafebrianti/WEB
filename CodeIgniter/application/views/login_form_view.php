<html>
<head>
<title>Demo Models</title>
</head>
<body>
<h2>Login</h2>
<form action="http://localhost/CodeIgniter/index.php/login" method="post">
<!--<php echo $model->labels['username']; ?><br>-->
<input placeholder="Username" type="text" name="username"><br><br>
<!--<php echo $model->labels['password']; ?><br>-->
<input placeholder="Password" type="text" name="password"><br><br>
<input type="submit" name="Submit" value="Login"><br><br>
</form>
</body>
</html>