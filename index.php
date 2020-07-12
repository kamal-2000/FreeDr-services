<html>
<head>
<link rel="stylesheet" href="message2.css">
<link rel="stylesheet" href="jqueryui/jquery-ui.css">
<link rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
<link rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
<script src="https://kit.fontawesome.com/9841871939.js" crossorigin="anonymous"></script>
<script>
function myFunction() {
  confirm("If you are a critical patient (Like You have a diabetes, Cancer, etc). So please Don't prefer this website. In case the medicine has recact you So the Doctor's are not responsible for it.");
}

</script>
</head>
<body onload="myFunction()">
<form action="signup.php" method="post" onSubmit="return validateTextbox();">
<div id="border">
</div>

<div id="heading">
<h1> FreeDr Services</h1>
</div>

<div id="afterheading">
<h1> www.FreeDr.com</h1>


</div>



<div id="signup">
<img src="signup icon.png" class="icon"><br>

<h1>Create Your Account</h1>
Full Name<br> <input type="txt"class="inputbox" name="name" id="name" required><br><br>
E-mail<br> <input type="email" class="inputbox" name="email" id="email" required><br><br>
Password <br><input type="password" class="inputbox" name="password" id="password" required><br><br>
Confirm Password <br><input type="password" class="inputbox"name="cpassword" id="cpassword" required><br><br>
Gender </br></br><input type="radio" name="gender" value="m"> Male
<input type="radio" name="gender" value="f"> Female
<input type="radio" name="gender" value="o"> Others
</br></br>

Phone No. <br><input type="tel" class="inputbox" name="phone" id="phone" required><br><br>
State <br><input type"txt" class="inputbox" name="state" id="state"required></br></br>
<input type="submit" class="button" value="Sign Up">

</br></br><a href="loginmain.php" class="login">Already Have a Account</a>

</div>
<div id="navbar">
	<button class="buttonfirst"><a href="new 1.html">Home</a></button>
	<button class="buttonsecond"><a href="new 1.html">About</a></button>
	<button class="buttonthird"><a href="new 1.html">Team</a></button>
	<button class="buttonfourth"><a href="new 1.html">Contact</a></button>
</div>


<div id="icons">
  </br></br><div id="lastborder">
  <div class="listicons">
	<ul>
	<center>
	<li><a href="https://en-gb.facebook.com/"><i class="fa fa-facebook"></i></a></li>
	<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
	<li><a href="https://github.com/kamal-2000"><i class="fa fa-github"></i></a></li>
	<li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
	</center>
	</ul>
	</div>
	<div class="lastpara1">
		<h2>ADDRESS</H2>
		<p>Kristu Jayanti College, Bangalore, India </p>
	</div>
	</div>
	
	<div class="lastpara2">
		<h2>OPENING HOURS</h2>
		<p>Mon - Fri: 7am - 10pm</p>
			<p>Saturday: 8am - 10pm</p>
			<p>Sunday: 8am - 11pm<p>
		</div>
	<div class="lastpara3">
		<h2>FEEDBACK</h2>
		<textarea rows="6" cols="30"></textarea>
	</div>
	<div id="feedbackbutton">
		<button class="feedbackbutton">Submit</button>
	</div>
	<div class="lastpara4">
		<center><p>© 2020 by FreeDr Services. Proudly created with Jayantian Team</p></center>
		</div>
		
	</div>
	</div>
  </div>
  <div>
    <script>

<script src="jquery-3.5.1.js"></script>
<script src="jqueryui/jquery-ui.js"></script>
<script>
function validateTextbox()
{
var password=document.getElementById("password");
var cpassword=document.getElementById("cpassword");
if(password.value != cpassword.value)
{
	alert("Password and Confirm Password is not match"); 
	return false;
}
}
</script>
<script>

$(document).ready(function()
{
$("#nav").tabs({events:"mouseover"});
$("#states").autocomplete({source:["Rajasthan","Delhi","Kerala","Tamil Nadu","Karnataka","Andra Pradesh","Telangana","Goa","Maharashtra","Gujarat","Madya Pradesh","Haryana","Punjab","Uttar Pardesh","Uttarakhand","Himachal Pradesh","Odisa","Jharkhand","Chattisgarh","Bihar","Sikkim","Tripura","Manipur","Meghalaya","Mizoram","Assam","Arunachal Pradesh","Nagaland","West Bengal"]});
$("#gender").selectmenu({width:115},{height:15});
$("window").load(function() {
      alert("window load occurred!");
});
});
</script>
</form>
</body>
</html>