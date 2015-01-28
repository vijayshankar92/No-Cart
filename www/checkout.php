<?php
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {

header ("Location: start.php");

}
$hidden=$_POST['hide'];
$tableData = json_decode($hidden,TRUE);

foreach($tableData as $item) { 

    $Sum = $item['Sum']; 
   
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="../pages.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap-theme.css" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery.json-2.4.min.js"></script>

<script type="text/javascript">


function insert()
{
var sample= '<?php echo $hidden;?>';

$("#hidden").val(sample);
}
</script>
	<style>
		
		body
		{
		background-color:#101010; 
		color:white;
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
</head>
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
              <a href="history.php" class="btn" style="color:white;">Order History</a>
            </div>
            <div class="form-group">
              <a href="logout.php" class="btn" style="color:white;">Logout</a>
            </div>

          </form>
        </div><!--/.navbar-collapse -->

      </div>
    </nav>
<div class=row>
<div class="col-lg-6" style="height:500px; ">
<div class="row">
<div class="col-lg-11 col-lg-offset-1">

  <form class="form-horizontal" action="success.php" method="post" role="form">
    <fieldset>
      <legend style="color:white">Card Details</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>mm</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="expiry-year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
        </div>
      </div>
 
    </fieldset>
  

</div>
</div>

</div>
<div class="col-lg-6" style="height:500px; ">

<div class="row">
<div class="col-lg-6 col-lg-offset-2">


<h4><b><u>Order Summary</u></b></h4>
Your total amount is <?php echo $Sum ?>$.


</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-2 col-lg-offset-10">
<form action="success.php" method="post">
<button class="btn btn-primary" type="submit" onclick="insert();" >Confirm</button>
<input type="hidden" name="hiddenData" id="hidden">
</form>
</div>
</div>
</div>
</body>