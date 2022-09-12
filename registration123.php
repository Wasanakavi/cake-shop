<?php

if($_POST["Submit"] ?? ""=="submit"){
$a = $_POST["fn"];
$b = $_POST["address"];
$c = $_POST["contact"];
$d = $_POST["email"];
$e = $_POST["city"];
$f = $_POST["gender"];
$g = $_POST["pwd"];


$conn= new mysqli('localhost','root','');
if(!$conn)
{
echo"not connected";
} 
if (!mysqli_select_db($conn,'jays_art')){
	echo "database not seected";
}
$sqlq="INSERT INTO registration(customer_name,password,address,contact_numberr,email,gender,city) VALUES ('$a','$g','$b','$c','$d','$f','$e')";
if(!mysqli_query ($conn,$sqlq)){
	echo "not imserted";

}	else{
	header("location:login.php");
}	
}?>
	
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
<link rel="stylesheet" type="text/css" href="registration.css">
<script>
function validate()
{
var a=document.getElementById("fn").value;
var b=document.getElementById("pwd").value;
var c=document.getElementById("address").value;
var d=document.getElementById("contact").value;
var e=document.getElementById("email").value;
var f=document.getElementById("male").checked;
var g=document.getElementById("female").checked;
var h=document.getElementById("country").value;
var i=document.getElementById("check").checked;
if(a==""){
alert("Please Enter Your name");
return false

alert("Please Enter Your Password");
return false;
}
 if (b.length<6 || b.length>10) 
 {
alert("Password must be between 6 to 10 characters");
return false;
 }

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
 if (f!=true && g!=true)
 {
 alert ("Select your gender");
 return false; 
 }
 if(h == 0)
 {
 alert("select your city");
 return false;
 }
 if (i!=true)
 {
 alert ("Confirm your information");
 return false;
 } 
}


</script>
</head>
<body>
<div id="topbar">
<div id="topnav">
  <a id="active" href="#login">Registration</a>
  <a href="cake.html">Home</a>
  <a href="login.php">Log In</a>
  <form color="red" align="right"action="logout.php" method="post"><input type="submit" id="logout" name="logout" value="LOGOUT" onclick="logout()"></form>
  </div>
</div>

<section> <div class="sideMenu"><div class="frmdiv">
<html>
<head>
</head>
<body bgcolor="purple">
<h1 align = "center"> Customer Registration </h1>
<form name = "Registration" action = "registration.php" method = "POST">
<table align = "center"cellpadding="8" cellspacing="8">
<tr>
<td>Customer Name :</td>
<td><input type = "text" name = "fn" id = "fn"></td></tr>
<tr>
<td>Password :</td>
<td><input type = "password" name = "pwd" id = "pwd" ></td></tr>
<tr>
<td>Address :</td>
<td><textarea name = "address" id ="address" rows = "2" cols = "20" ></textarea ></td></tr>
<tr>
<td>Contact Number :</td>
<td><input type = "text" name = "contact" id = "contact"></td></tr>
<tr>
<td>Email :</td>
<td><input type = "email" name = "email" id = "email" ></td></tr>
<tr>
<td>Gender :</td> 
<td><input type = "radio" name = "gender" id = "male" value = "M">Male
<input type = "radio" name = "gender" id = "female" value = "F">Female</td>
</tr>
<tr>
<td>City :</td>
<td><select name = "city" id = "city">
<option value="select">-select-</option>
<option value="galle">Galle</option>
<option value="matara">Matara</option>
<option value="colombo">Colombo</option>
</select></td></tr>
<tr>
<td> Confirm Infomation:</td>
<td><input type = "checkbox" name = "check" id = "check" value = "yes" ></td></tr>
<tr>
<td><input type = "Submit" value="submit" name = "Submit" onclick="return validate();" ></td>
<td><input type = "Reset" name = "Reset"></td></tr>
</table>
</form>
</body>
</html>



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
	
