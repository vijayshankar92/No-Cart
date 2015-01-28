<?php
include('db.php');
$search=$_GET['drop1'];

$query = "SELECT ProductId,ProductName,Price,ProductImage FROM product where ProductId like '%".$search."%' or ProductName like '%".$search."%'";

$result = mysqli_query($con, $query)
or die('Error querying database.');
$temp= array();
while($row = mysqli_fetch_assoc($result))
{
$temp[] = $row;

}
echo json_encode($temp);

?>