<?php
include("session.php"); 
$connect = mysqli_connect("localhost", "root", "", "cake");  
$user = $_SESSION["user"]["CustomerName"];
if($_POST["Submit"] ?? ""=="submit"){
	
	
	
	$query = "SELECT * FROM order_information Where CustomerName = '$user' AND status = 'Pending' ORDER BY id ASC";  
	$result = mysqli_query($connect, $query);  
	$total  = 0;
	if(mysqli_num_rows($result) > 0)  
	{  
		ob_start();

		ob_get_clean();

		header( "Content-Type: application/vnd.ms-excel" );
		header( "Content-disposition: attachment; filename=bill-payment.xls" );
		echo 'Item Name' . "\t\t" . 'Code' . "\t" . 'Quantity' . "\t" . 'Price' . "\t" . 'Total' . "\n";
		$total = 0;
		while($row = mysqli_fetch_array($result))  
		{  
			$total = $total + $row['Amount']*$row['price'];
			echo $row['itemName'] . "\t\t" . $row['Code'] . "\t" . $row['Amount'] ."\t LKR" . $row['price'] . "\t LKR" . $row['Amount']*$row['price'] ."\n";
		}
		echo "\n\t\t\t" .'Total' . "\t\t LKR" . $total. "\n";
		die();
		
	}
	
}
		
?>

<?php

?>


<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
<link rel="stylesheet" type="text/css" href="payment 1.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">

<script>

function validate()
{
var i=document.getElementById("date").value;
if (i== "")
 {
 alert ("Enter date");
 return false;
 } 
}


</script>
</head>
<body style="background-image:url('pay 1.jpg');">

<div id="topbar">
<div id="topnav">
	<a href="cake.html">Home</a>
	<a href="cakecart.php">Order Menu</a>
	<a id="active" href="payment.php">Payment </a>
	<a href="add cart.php">Cart</a>
	
  </div>
</div>

<br><br>



<div class="container">
<form name = "order" action = "payment.php" method = "POST" enctype="multipart/form-data">

        <div class="row jumbotron">
        <div class="col-sm-6 form-group">
        <h2 class="text-center" style="color:blue;" >PAYMENT</h2>
        
</div>
<div class="col-sm-6 form-group">
        
</div>
            <div class="col-sm-12 form-group">
                <label for="amount">Amount</label>
                <span class="form-control"><?php echo $_GET["amount"];?></span>
            </div>
            
            <div class="col-sm-12 form-group">
                <label for="cn">Card Number</label>
                <input type="number" class="form-control" name="cn" id="cn" placeholder="Enter your Card no." required>
            </div>
            <div class="col-sm-4 form-group">
                <label for="month">Month</label><br>
                <input type="number"  name="month" id="month" class="form-control" required placeholder="01">
            </div>
            
            
            <div class="col-sm-4 form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" name="year" id="year" placeholder="2021" required>
                
            </div>
            <div class="col-sm-4 form-group">
                <label for="cvv">CVV</label>
                <input type="number" name="cvv" class="form-control" id="cvv" placeholder="8080" required>
            </div>
            
            <div class="col-sm-6 form-group mb-0">
               <button  class="btn btn-danger float-left"  ><a href="add cart.php" style="color:white;">Close</a></button>
            </div>
            

            <div class="col-sm-6 form-group mb-0">
            <input  type = "Submit" value="Pay " name = "Submit" onclick="return validate();" class="btn btn-primary float-right" >
            </div>
            
        </div>
        </form>
    </div>
</div>
<br> <br> <br>

<footer >
        <div class="footer">
            <div class="row">
                <div class="col1">
                    <ul type="none">
                        <li>INFO</li><br>
                        <li><a href="about.html">About Us</a></li>
                       
                        <li><a href="https://translate.google.lk/">Sinhala & Tamil Translator</a></li>
                         
                    </ul>
                </div>
                <div class="col2">
                    <ul class="socialmedia" type="none">
                        <li>CONTACT US</li><br>
                        <li class="fb"><a  href="https://www.facebook.com/Jays-Art-103578618093586/" target="_blank">Facebook</a></li>
                        
                        <li class="in"><a href="https://instagram.com/jayani.senarathna.98?igshid=nur5j2cghh1l" target="_blank">Instagram</a></li>
                        
                    </ul>
                </div>
                <div class="col3">
                    <ul class="officeinfo" type="none">
                        <li>GALLE HEAD OFFICE</li><br>
                        <li>No 374, Samagi Road, Piyadigama,</li>
                        <li>Galle.</li>
                        <li class="ofi1"><strong>Email:</strong> jaysartcake@gmail.com</li>
                        <li class="ofi2"><strong>Hotline:</strong> +94 76 684 7435</li>
                        <li class="ofi3"><strong>Landline:</strong> +94 91 393 0888</li>
                    </ul>
                </div>
                
                <div class="col4" >
                    <ul type="none">
                        <li>Payments</li><br>
                        <li><img class="cards" src="creditcard.jfif" alt="Accepted Credit Cards" height="100px" width="200px"></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
	</body>
	</html>
	
	
	
