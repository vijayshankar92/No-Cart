<?php
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {

header ("Location: login.php");

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>History</title>
<link rel="stylesheet" href="pages.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap-theme.css" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery.json-2.4.min.js"></script>

</head>
<style>
		.head div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.head div span{
	color: #5379fa !important;
	text-align: left;
}
		body
		{
		background-color:#101010; 
		color:white;
		}
	    select,input
		{
		color:black;
		}
		</style>
<body>

    <nav class="navbar navbar-inverse " role="navigation">
      <div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                   <a href="start.php">
                        <div class="head">
			<div><b>No<span>cart</span><b></div>
		</div>
                    </a>

        </div>
       <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <a href="../history.php" class="btn" style="color:white;">Order History</a>
            </div>
            <div class="form-group">
              <a href="../logout.php" class="btn" style="color:white;">Logout</a>
            </div>

          </form>
        </div><!--/.navbar-collapse -->

      </div>
    </nav>
			<div class="container">
			<div class="row">
		<?php
		if($_SESSION['login_user']) {
		?>
		Logged In as <?php echo $_SESSION['login_user']; ?>
		<?php
		}
		?>
	
<?php
			$dbc = mysqli_connect('localhost', 'root', '', 'cartless')
			or die('Error connecting to MySQL server.');
					$P_ID = $_SESSION['login_user'];
			$query = "SELECT * FROM `history` WHERE UserId='$P_ID' ";
				
			$result = mysqli_query($dbc, $query)
			or die('Error querying database.');
	
			
			?>
			<a href="../searchProducts.php"><button class="btn btn-primary" type="button" style="float:right;">Back</button></a>
</div>

<table id="display" class="table">
<thead>
<th>ProductId</th>
<th>Quantity</th>
<th>Order Date</th>

</thead>
	
				<?php
				 while($row = mysqli_fetch_assoc($result)) 
				{
				
					
				?> <tr>
		<td><?php echo $row["ProductId"]; ?></td>		 
		
		<td><?php echo	$row["Quantity"];?></td>
		
		<td><?php echo	$row["Date"];?></td>
			
					<?php }?>
				</tr>
				
				
	
</table>


</body>
</html>