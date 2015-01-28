<?php
include('db.php');
if(isset($_POST["username"]))
{
$username=$_POST["username"];
$sql="SELECT * FROM user WHERE UserId= '".$username."' ";
$result = mysqli_query($con,$sql);

if($result)
  $numrows = mysqli_num_rows($result);
else
  die("Select Query failed");

  echo $numrows;
}
?>