<?php
include("session.php");

if($_POST["price"] ?? ""=="price"){


$f = $_POST["code"];
$h = $_POST["amount"];


	if($f==1){
		$total=($h*2500);
		
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
		
	}
	
	if($f==2){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==3){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==4){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==5){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	
	if($f==6){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==7){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==8){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==9){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==10){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==11){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==12){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==13){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==14){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==15){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==16){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==17){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==18){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==19){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==20){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==21){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==22){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==23){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==24){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==25){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==26){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==27){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}if($f==28){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}if($f==29){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
    if($f==30){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==31){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==32){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==33){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==34){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==35){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==36){
		$total=($h*2500);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==37){
		$total=($h*600);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==38){
		$total=($h*300);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==39){
		$total=($h*400);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
	if($f==40){
		$total=($h*600);
		echo"<script>window.alert('TOTAL PRICE IS {$total}')</script>";
	}
}
?>

<?php




if($_POST["Submit"] ?? ""=="submit"){
	


$a = $_POST["fn"];
$b = $_POST["address"];
$c = $_POST["contact"];
$d = $_POST["email"];
$e = $_POST["type"];
$f = $_POST["code"];
$g = $_POST["date"];
$h = $_POST["amount"];
$i=$_POST["clour"];
$j= $_POST["text"];
if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
	echo "error"; 
}
else{
	$image=$_FILES['image']['tmp_name'];
	$image=addslashes(file_get_contents($image));
	
}

$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 
if (!mysqli_select_db($conn,'cake')){
	echo "database not seected";
}
$sqlq="INSERT INTO order_information(CustomerName,Address,Date,Type,Code,Amount,Telephone,Email,image,colour,idea) VALUES ('$a','$b','$g','$e','$f','$h','$c','$d','$image','$i','$j')";
		if(!mysqli_query ($conn,$sqlq)){
		}
		
		
		mysqli_close($conn);
}
?>


<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order page</title>
<link rel="stylesheet" type="text/css" href="order.css">
<script>
function calculate(){
	var g=document.getElementById("code").value;
	var h=document.getElementById("amount").value;
	var total=0;
	if(g==1){
		total=total+(h*3950);
		alert(" TOTAL PRICE:"+total);
	}
	
}
function validate()
{
var a=document.getElementById("fn").value;
var c=document.getElementById("address").value;
var d=document.getElementById("contact").value;
var e=document.getElementById("email").value;
var f=document.getElementById("type").value;
var g=document.getElementById("code").value;
var h=document.getElementById("amount").value;
var i=document.getElementById("date").value;
if(a==""){
alert("Please Enter Your name");
return false;

if(c==""){
alert("Please Enter Your Address");
return false;
}
if(d==""){
alert("Please Enter Your Phone number");
return false;
}
if (isNaN(d))
 {
 alert ("Enter a valid Pone number");
 return false;
 }
 if(e==""){
alert("Please Enter Your email");
return false;
}
 if (f ==0)
 {
 alert ("Select cake type");
 return false; 
 }
 if(g == 0)
 {
 alert("select code");
 return false;
 }
 if (h== "")
 {
 alert ("Enter amount");
 return false;
 } 
 if (i== "")
 {
 alert ("Enter date");
 return false;
 } 
}


</script>
</head>
<body>
<div id="topbar">
<div id="topnav">
  <a id="active" href="#login">Order</a>
  <a href="cake.html">Home</a>
  <a href="Product and Services.html">Product And Services</a>
  <a href="login.php">Log In</a>
  <a href="About.html">About Us</a>
  <a href="registration.php">Registration</a>
  <a href="cakecart.php">Cart</a>
  <form color="red" align="right"action="logout.php" method="post"><input type="submit" id="logout" name="logout" value="LOGOUT"></form>
  </div>

</div>

<section> <div class="sideMenu"><div class="frmdiv">




<h1 align = "center"> Order </h1>

<form name = "order" action = "order.php" method = "POST" enctype="multipart/form-data">
<table align = "center"cellpadding="8" cellspacing="10">
<tr>
<td>Customer Name :</td>
<td><input type = "text" name = "fn" id = "fn" required></td></tr>
<tr>
<td>Address :</td>
<td><textarea name = "address" id ="address" rows = "2" cols = "20" required></textarea ></td></tr>
<tr>
<td>Contact Number :</td>
<td><input type = "number" name = "contact" id = "contact" required></td></tr>
<tr>
<td>Email :</td>
<td><input type = "email" name = "email" id = "email" required></td></tr>

<tr>
<td>Cake Type :</td>
<td><select name = "type" id = "type" required >
<option value="0">-select-</option>
<option value="1"> fondent design cake</option>
<option value="2"> Butter cream Cake</option>
<option value="4">Cup Cake</option>
</select></td></tr>
<tr>
<td>Cake Code :</td>
<td><select name = "code" id = "code" required >
<option value="0">-select-</option>
<option value="1">C#001</option>
<option value="2">C#002</option>
<option value="3">C#003</option>
<option value="4">C#004</option>
<option value="5">C#005</option>
<option value="6">C#006</option>
<option value="7">C#007</option>
<option value="8">C#008</option>
<option value="9">C#009</option>
<option value="10">C#010</option>
<option value="11">C#011</option>
<option value="12">C#012</option>
<option value="13">C#013</option>
<option value="14">C#014</option>
<option value="15">C#015</option>
<option value="16">C#016</option>
<option value="17">C#017</option>
<option value="18">C#018</option>
<option value="19">C#019</option>
<option value="20">C#020</option>
<option value="21">C#021</option>
<option value="22">C#022</option>
<option value="23">C#023</option>
<option value="24">C#024</option>
<option value="24">C#025</option>
<option value="24">C#026</option>
<option value="24">C#027</option>
<option value="24">C#028</option>
<option value="24">C#029</option>
<option value="24">C#030</option>
<option value="24">C#031</option>
<option value="24">C#032</option>
<option value="24">C#033</option>
<option value="24">C#034</option>
<option value="24">C#035</option>
<option value="24">C#036</option>
<option value="24">C#037</option>
<option value="24">C#038</option>
<option value="24">C#039</option>
<option value="24">C#040</option>


</select></td></tr>
<tr>
<td>Amount :</td>
<td><input type = "number" name = "amount" id = "amount" required></td></tr>
<tr>
<td>Date :</td>
<td><input type="date" name = "date" id = "date" required></td></tr>


<tr>
<td>insert order image:</td>

<td><input type="file" name="image" id="image">
	</td></tr>

<tr>
<td>clour chart :</td>
<td><input type = "color" name = "clour" id = "clour" required></td></tr>

<tr>
<td>text youre idea :</td>
<td><textarea  name = "text" id = "text" required> </textarea></td></tr>

<tr>
<td><input type = "Submit" value="submit" name = "Submit" onclick="return validate();"></td>
<td><input type = "Reset" name = "Reset"></td>
<td><input type ="submit" name="price" value="price"></td>
<td><input type ="submit" name="pay" value="pay"></td>
</tr>

</table>


</form>








</div>

</div>
</section>

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
	
	
	
