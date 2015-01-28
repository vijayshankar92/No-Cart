<?php
include('db.php');
if(isset($_POST['register']))
{
$fname=test_input($_POST['fname']);
$lname=test_input($_POST['lname']);
$uname=test_input($_POST['username']);
$pwd=test_input($_POST['password']);
$pwd1=test_input($_POST['repassword']);
$addr1=test_input($_POST['address1']);

$city=test_input($_POST['city']);
$state=test_input($_POST['state']);
$zip=test_input($_POST['zip']);
$number=test_input($_POST['number']);

$sql="SELECT * FROM user WHERE userid= '".$uname."' ";
$result = mysqli_query($con,$sql);

if($result)
  $numrows = mysqli_num_rows($result);
else
  die("Select Query failed");

if ( $numrows != 0)
{
 header('location:register1.php');}
else
{

	$sql = " insert into user (`fname`,`lname`,`UserId`,`Password`,`RetypePassword`,`Address`,`city`,`state`,`zip`,`ContactNo`) values 
	('".$fname."' ,'".$lname."', '".$uname."','".$pwd."' ,'".$pwd1."' ,'".$addr1."','".$city."','".$state."','".$zip."','".$number."')";
	$result = mysqli_query($con,$sql);
	header('Location:registered.html?success');	
}


}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
