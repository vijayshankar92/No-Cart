<?php

$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);

if (!$con)
{
die("Connection failed: " . mysqli_connect_error());
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_select_db($con,"cartless");

//echo "Database successfully Connected";

?>