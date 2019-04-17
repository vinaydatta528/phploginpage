<?php
  session_start();
?>
<html>
<head>
<title>
Home page</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#7f8c8d">
<div id="main-wrapper">
<center><h2>Homepage</h2>
<h3> Welcome <?php
 echo $_SESSION['username']
?> </h3>
<img src="images/img_avatar2.png" class="avatar">
</center>
<form action="home.php" method="post" class="myform">

<input type="submit" name="logout" class="logout-btn" value="Logout"/><br>
</form>
<?php

if(isset($_POST['logout']))
	{
  session_destroy();
  header('location:test.php');
	}
?>

</div>
</body>
</html>
