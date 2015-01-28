<?php
include('login1.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<!--<link href="pages.css" rel="stylesheet" type="text/css">-->
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap-theme.css" type="text/css" />
</head>
		<style>
		
		body
		{
		background-color:#101010; 
		color:white;
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
                        <img src="imgs/logo-mobile.png" alt="JustEat" style="height:40px;">
                    </a>

        </div>
 
      </div>
    </nav>
	
	
<div id="section">
<h2><center>Login</center></h2>
<form action="" method="post" class="form-signin" role="form"">
<table align="center"><tr><td><label style="font-size:14pt;">UserName <br/><br/></label></td><td>
<input id="name" name="username" class="form-control" placeholder="UserName" type="text"><br/><br/></td></tr>
<tr><td><label style="font-size:14pt;">Password <br/><br/></label></td>
<td><input id="password" class="form-control" name="password" placeholder="**********" type="password"><br/><br/></td></tr>
<tr><td></td><td><button class="btn btn-primary" style="width:80px;" name="submit" type="submit">Login</button>&nbsp; &nbsp; &nbsp;<a href="register.php" class="btn btn-primary" style="width:80px;">Register</a><br/></td></tr><br/>
<tr><td></td><td><span><?php echo $error; ?></span></td></tr></table>        
</form>
<br/>


</div>

</body>

</html>