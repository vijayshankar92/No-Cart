<?php
session_start(); 
include('db.php');
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

	$sql="SELECT * FROM user WHERE UserId = '".$username."' AND Password = '".$password."' ";
	$result = mysqli_query($con,$sql);		
	if($result)
  		$numrows = mysqli_num_rows($result);
	else
  		die("Select Query failed");
if ($numrows == 1) {
$_SESSION['login_user']=$username;
$row = mysqli_fetch_assoc($result);
$_SESSION['user_id']=$row['ProfileId'];

header('Location:../searchProducts.php');
} else {
$error = "Username or Password is invalid";
}
mysqli_close($con);
}
}
?>