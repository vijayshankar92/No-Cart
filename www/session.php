<?php
session_start(); 
include('db.php');

	$username=$_SESSION['login_user'];
	$sql="SELECT * FROM users WHERE username = '".$username."'";
	$result = mysqli_query($con,$sql);		
	if($result)
  		$numrows = mysqli_num_rows($result);
	else
  		die("Select Query failed");
if ($numrows == 1) {
$_SESSION['user_name']=$username;
header('Location:../welcome.php');
} else {
$error = "Username or Password is invalid";
}
mysqli_close($con);
}
}
?>