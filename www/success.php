<?php
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {

header ("Location: login.php");

}
$dbc = mysqli_connect('localhost', 'root', '', 'cartless')
or die('Error connecting to MySQL server.');
$hide=$_POST['hiddenData'];
$tableData = json_decode($hide,TRUE);
$pid=$_SESSION['login_user'];
$date = date('Y-m-d H:i:s');
foreach($tableData as $item) { 

    
    $ProductId=$item['ProductId'];
	$Quantity = intval($item['Quantity']);
	
	$query="INSERT INTO `cartless`.`history` VALUES ('$pid', '$ProductId', '$date', $Quantity)";
   
$result = mysqli_query($dbc, $query)
or die('Error querying database.'.$_SESSION['user_id']);
	}
?>
<html>
<head>
<title>Confirmation Page</title>
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap-theme.css" type="text/css" />
<link rel=
"stylesheet" href="../css/bootstrap.min.css" type="text/css" />
</head>
<style>
		
		body
		{
		background-color:#101010; 
		color:white;
		}
	.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
	text-align: left;
}
		</style>

<body>

<div id="section" style="margin-top:260px;">
<h2 class="text-justify"><center>Payment Successfull!! </center></h2>
<h4><center>Congratulations <font style="color:blue;"><?php echo $_SESSION['login_user'];?></font> for placing your order.Your order will be delivered in fifteen minutes. Thank you.</center></h4>
<center><a href="start.php" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span></a></center>
</div>
</body>
</html>