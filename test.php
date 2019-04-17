<?php

session_start();
   require 'dbconfig/config.php';
?>
<html>
<head>
<title>
Login page</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#7f8c8d">
<div id="main-wrapper">
<center><h2>Login form</h2>
<img src="images/img_avatar2.png" class="avatar">
</center>
<form action="test.php" method="post" class="myform">
<label><b>Username</label>
<input  name="username" type="text"  class="input" placeholder="Type your username"/>
<label><b>Password</label>
<input name="password" type="password"  class="input" placeholder="Type password"/>
<input name="login" type="submit"  class="login-btn" value="Login"/><br>
<a href="reg.php"><input type="button"  class="reg-btn" value="Register"/></a>
</form>
<?php
    if(isset($_POST['login']))
	{
		$username= $_POST['username'];
	$password= $_POST['password'];
	 $query= "select * from user WHERE username= '$username' AND password= '$password'";
		$query_run = mysqli_query($con,$query);
		if (mysqli_num_rows($query_run)>0)
	 {
		 $_SESSION['username']= $username;
		 header('location:home.php');
	 }
	else
	{
		
		echo '<script type="text/javascript"> alert ("invalid login") </script>'; 	
		
	}		
		
		
		
		
	}
	
	
	
	
?>
</div>
</body>
</html>
