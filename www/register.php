<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register</title>
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap-theme.css" type="text/css" />
<script src="validate.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
    <script>
 // Javascript function to check username availability and password strength
         $(document).ready(function(){
		  $("#username").keyup(function(){ 
        var uname = $(this).val();
        var usernameresult = $("#result"); 
        if(uname.length > 2) { 
            usernameresult.html("Loading.."); 
            var UrlToPass = "action=username_availability&username="+uname;
            $.ajax({ 
            type : "POST",
            data : UrlToPass,
            url  : "check.php",
            success: function(responseText){ // Get the result from check.php
                if(responseText == 0){
                    usernameresult.html('<span id="success">Username name available</span>');
                }
                else if(responseText > 0){
                    usernameresult.html('<span id="error">Username already exists</span>');
                }
                else{
                    alert("Problem with sql query");
                }
            }
            });
        }else{
            usernameresult.html('<span id="error">Enter atleast 3 characters');
        }
        if(Username.length == 0) {
            usernameresult.html("");
        }
    });
	// Defining the rules of having a strong password
	 $("#password").keyup(function() { 
	  //$("#result").hide();
        var passlength = $(this).val().length; 
        var passstrength = $("#passresult"); 
         
        if(passlength <= 0) { 
            passstrength.html(""); 
            passstrength.removeClass("normal weak strong verystrong"); 
        }
        if(passlength > 0 && passlength < 4) { 
            passstrength.html("weak");
            passstrength.removeClass("normal strong verystrong").addClass("weak");
        }
        if(passlength > 4 && passlength < 8) {
            passstrength.html("Normal");
            passstrength.removeClass("weak strong verystrong").addClass("normal");          
        }   
        if(passlength >= 8 && passlength < 12) { 
            passstrength.html("Strong");
            passstrength.removeClass("weak normal verystron").addClass("strong");
        }
        if(passlength >= 12) { 
            passstrength.html("Very Strong");
            passstrength.removeClass("weak normal strong").addClass("verystrong");
        }
    });
			});
 
 </script>
 
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


      </div>
    </nav>


<div id="section">
<center><h1>Registration<br/></h1></center>
<form name="register_form" action="register1.php" method="post">
<table align="center">
<tr><td><label>First Name:<span>*</span></label><br/><br/></td><td><input name="fname" type="text" /><br/><br/></td></tr>
<tr><td><label>Last Name:<span>*</span></label><br/><br/></td><td><input name="lname" type="text" /><br/><br/></td></tr>
<tr><td><label>Username:<span>*</span></label><br/><br/></td><td><input name="username" type="email" id="username"/><br/><br/></td><td><div id="result"></div><br/></td></tr>
<tr><td><label>Password:<span>*</span></label><br/><br/></td><td><input name="password" type="password" id="password" /><br/><br/></td><td><div id="passresult"></div><br/></td></tr>
<tr><td><label>Confirm Password:<span>*</span></label><br/><br/></td><td><input name="repassword" type="password" /><br/><br/></td></tr>
<tr><td><label>Address:<span>*</span></label><br/><br/></td><td><input name="address1" type="text" /><br/><br/></td></tr>

<tr><td><label>City:<span>*</span></label><br/><br/></td><td><input name="city" type="text" /><br/><br/></td></tr>
<tr><td><label>State:<span>*</span></label><br/><br/></td><td><input name="state" type="text" /><br/><br/></td></tr>
<tr><td><label>Zip:<span>*</span></label><br/><br/></td><td><input name="zip" type="text" /><br/><br/></td></tr>
<tr><td><label>Contact Number:<span>*</span></label><br/><br/></td><td><input name="number" type="text" /><br/><br/></td></tr>
<tr><td></td><td><button type="submit" style="width:80px;" class="btn btn-primary" value="Register" name="register">Register</button>&nbsp; &nbsp; <a href="cater.html" class="btn btn-primary"  style="width:80px;">Cancel</a></td></tr></table>
</form>
 
<script  type="text/javascript">
// Form validation using javascript

 var formval= new Validator("register_form");
 formval.addValidation("fname","req","Please enter your First Name");
 formval.addValidation("fname","maxlen=20","Max length for FirstName is 20");
 formval.addValidation("fname","alpha","Please enter alphabetical characters");
 formval.addValidation("lname","req","Please enter your last name");
 formval.addValidation("lname","maxlen=20","Max length for lastname is 20");
 formval.addValidation("lname","alpha","Please enter alphabetical characters");
 formval.addValidation("username","req","Please enter your Username");
 formval.addValidation("username","email","Please enter a valid e-mail address");
 formval.addValidation("username","maxlen=40");
 formval.addValidation("password","req","Please provide the password");
 formval.addValidation("password","maxlen=15");
 formval.addValidation("password","minlen=6");
 formval.addValidation("password","neelmnt=username","Password should not be the same as username");
 formval.addValidation("password","neelmnt=fname","Password should not be the same as first name");
 formval.addValidation("password","neelmnt=lname","Password should not be the same as last name");
 formval.addValidation("repassword","req","Please re-enter the password");
 formval.addValidation("repassword","eqelmnt=password","Both the passwords should be the same");
 formval.addValidation("address1","req","Please enter your address");
 formval.addValidation("address1","maxlen=100");
 formval.addValidation("address1","minlen=10");

 formval.addValidation("city","req","Please enter your city");
 formval.addValidation("city","alpha");
 formval.addValidation("city","maxlen=20");
 formval.addValidation("city","minlen=3");
 formval.addValidation("state","req","Please enter your state");
 formval.addValidation("state","alpha");
 formval.addValidation("state","maxlen=20");
 formval.addValidation("state","minlen=2");
 formval.addValidation("zip","req","Please enter the zip code");
 formval.addValidation("zip","numeric","Please enter in numbers");
 formval.addValidation("zip","maxlen=10");
 formval.addValidation("zip","minlen=5");
 formval.addValidation("number","req","Please enter your contact number");
 formval.addValidation("number","numeric","Please enter in numbers");
 formval.addValidation("number","maxlen=10");
 formval.addValidation("number","minlen=10");
</script>

<br/>

</div>
</body>
</html>

