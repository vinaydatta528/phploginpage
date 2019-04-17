<?php
  require 'dbconfig/config.php';
?>
<html>
<head>
<title>
Register page</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#7f8c8d">
<div id="main-wrapper">
<center><h2>Sign up form</h2>
<img src="images/img_avatar2.png" class="avatar">
</center>

<form action="reg.php" method="post" class="myform">
<label><b>Username</label>
<input name="username" type="text"  class="input" placeholder="Type your username"/>
<label><b>Password</label>
<input  name="password" type="password"  class="input" placeholder="Type password"/>
<label><b>Confirm Password</label>
<input name="cpassword" type="password"  class="input" placeholder="Type password"/>
<input name="submit_btn" type="submit"  class="signup-btn" value="Sign Up"/><br>
<a href="test.php"><input type="button"  class="back-btn" value="Back"/></a>
</form> 

<?php
  if(isset($_POST['submit_btn']))
 
 {
	$username= $_POST['username'];
	$password= $_POST['password'];
	 $cpassword= $_POST['cpassword'];
	 if ( $password == $cpassword)
	 {
		 $query= "select * from user WHERE username= '$username'";
		 $query_run = mysqli_query($con,$query);
		 
	 
	 
	 if (mysqli_num_rows($query_run)>0)
	 {
		 echo '<script type="text/javascript"> alert ("username already exists") </script>';
	 }
	else {
		 $query= "insert into user values('$username','$password')";
		 $query_run = mysqli_query($con,$query);
		 if($query_run)
		 {
			echo '<script type="text/javascript"> alert ("registered") </script>'; 
			 header('location:test.php');
		 }
		 else
		 {
		echo '<script type="text/javascript"> alert ("error") </script>'; 	 
	 }
	} 
	 }
	  else
		 {
		echo '<script type="text/javascript"> alert ("password and cpassword does not match") </script>'; 	 
	 }
  }	  
?>

</div>
</body>
</html>
