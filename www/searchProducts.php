<?php
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {

header ("Location: start.php");

}
?>
<!DOCTYPE HTML>
<html>
	<head>	
		<title>Product Search</title>	
		<link rel="stylesheet" href="pages.css" type="text/css" />

		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css" />	
		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery.json-2.4.min.js"></script>
		<script type="text/javascript"
			src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"/>	
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>			
		</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<style>
		.table 
		{
		color:black;
		}
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
		<script>
			var state=new Array();
			var obj="";
			$(document).ready(function(){
	             
						

			$("#search").click(function(){
					var hotel=new Array();
					
					var val1=$('#drop1').val();
					var urlval="hotel.php?drop1="+val1;
					
					       $.ajax({
	                type: "GET",
	                url: urlval,
					 success: function(response){
					 
						obj = jQuery.parseJSON(response);
						
						var count=0;
						$("#display").empty();
						$("#mainArea").empty();
		                   $("#display").append("<thead><th>Product</th><th>Product Id</th><th>Product Name</th><th>Price</th><th>Quantity</th></thead>");
						for(var i=0;i<obj.length;i++)
						{  
							var productId=obj[i].ProductId;
							var productName=obj[i].ProductName;
							var price=obj[i].Price;
							var image=obj[i].ProductImage;
					         
								$("#display").append("<tr><td><img class='img-thumbnail' src="+image+"></td><td>"+productId+"</td><td>"+productName+"</td><td>"+price+"</td><td><select><option value='0'>--SELECT--</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td></tr>");
								
							
							
						}
					$("#mainArea").append("<form action='checkout.php' method='post'><input type='hidden' id='hidden' name='hide'><button class='btn btn-primary pull-right' id='checkout' type='submit' onclick='checkoutval();'>Checkout</button></form>");
					
					}
				});
					
					
						
						
					
				
						
				});
				
			
		});
	function checkoutval(){
				  var sum=0;
				  var count=0;
				    $('#display tr').each(function(row, tr){
					if(count!=0)
					{
						        if($(tr).find('td:eq(4)').find('select').val()!=0)
								{
								var price=$(tr).find('td:eq(3)').text();
								var qty=$(tr).find('td:eq(4)').find('select').val();
								sum=sum+(price*qty);
								}
					}
					else
					{
					count++;
					}	
								 
						        });    
					
                  storeValues(sum)   
	
				}
				function storeValues(sum)
				{
			
				    var TableData = new Array();
				
				    $('#display tr').each(function(row, tr){
					if(row!=0)
					{
					   TableData.push({ProductId: $(tr).find('td:eq(1)').text(), Sum: sum, Quantity: $(tr).find('td:eq(4)').find('select').val()});
						      /*  TableData[row]={
				
						            "ProductId" : $(tr).find('td:eq(1)').text()
									, "Sum" : sum
									, "Quantity" : $(tr).find('td:eq(4)').find('select').val()
						           
					          }; */
				    //TableData.shift();  // first row will be empty - so remove
				    }
				    
				});
					
					$("#hidden").val(JSON.stringify(TableData));
					/*var sample=jQuery.parseJSON(TableData);
					alert(sample);*/
					/*$.ajax({
				    type: "POST",
				    url: "checkout.php",
				    data: "pTableData=" + TableData,
				    dataType:"json",
				    success: function(msg){
				       alert(msg);
				    }
				});*/
				
				
				}
				
		function contains(a, obj) {
		    for (var i = 0; i < a.length; i++) {
		        if (a[i] === obj) {
		            return true;
		        }
		    }
		    return false;
		}

		</script>
</head>	
	<body >

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

	<div class="container">
		<?php
		if($_SESSION['login_user']) {
		?>
		Logged In as <?php echo $_SESSION['login_user']; ?>
		<?php
		}
		?>
		
		<div class="row" style="height: 30px;"></div>
			<div id="searchBox" class="row text-center">
				<div class="col-md-6 col-md-offset-2" id="state">
					
					<input placeholder="Enter product code or product name" style="width:600px;" type="text" class="form-control"  id="drop1"></input>
					
				</div>
							
			
				
				<div class="col-md-1 col-md-offset-1">
					<button class="btn btn-primary" id="search" type="button">Search</button>
					
				</div>			
			</div>
			
			<div  class="panel panel-default" style="border:0px solid white; margin-top:20px;">

			  		<table id="display" class="table"></table>
			</div>
			<div id="mainArea"></div>
	</body>
</html>