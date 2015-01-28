<?php
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {

header ("Location: login.php");

}
?>
<!DOCTYPE html>
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
                 <a href="cater.html">
                        <img src="../images/logo-mobile.png" alt="JustEat" style="height:40px;">
                    </a>

        </div>


      </div>
    </nav>
<div id="section">
<h3 class="text-justify"><center>Payment Successfull. Congratulations <font style="color:blue;"><?php echo $_SESSION['login_user'];?></font> for placing your order.Your order will be delivered in half an hour.</center></h3>
<center><a href="cater.html" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span></a></center>
</div>
</body>
</html>