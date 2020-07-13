<?php  
 require('loginconnection.php');
 error_reporting(0);

if (isset($_POST['email']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM actualdatabase WHERE email='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
return false;

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
return false;
//echo "Invalid Login Credentials";
}
}
?>



<html>
<head>
<link rel="stylesheet" href="homepage.css">
<link rel="stylesheet" href="jqueryui/jquery-ui.css">
<link rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
<link rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
<script src="https://kit.fontawesome.com/9841871939.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="loginborder">
</div>
<div id="heading">
<h1> FreeDr Services</h1>
</div>
<div id="afterheading">
<h1> www.FreeDr.com</h1>
</div>
<div id="login">
	</div>
	<marquee>If you are a critical patient (Like You have a diabetes, Cancer, etc). So please Don't prefer this website. In case the medicine has recact you So the Doctor's are not responsible for it.</marquee>
	<div id="navbar">
	<button class="buttonfirst"><a href="homepage.php">Home</a></button>
	<button class="buttonsecond"><a href="about (1).html">About</a></button>
	<button class="buttonthird"><a href="teamm.html">Team</a></button>
	<button class="buttonfourth"><a href="contact.html">Contact</a></button>
	<button class="buttonfifth"><a href="loginmain.html">Logout</a></button>
</div>

<body>

  <div class="slider">

    <div id="img">
      <img src="doct1.jpg">
    </div>
	<div id="img">
      <img src="doctor3.jpg">
    </div>
	<div id="img">
      <img src="doct4.jpg">
    </div>
	<div id="img">
      <img src="doct10.jpg">
    </div>
	<div id="img">
      <img src="doct6.jpg">
    </div>
	<div id="img">
      <img src="doct7.jpg">
    </div>
	<div id="img">
      <img src="doct8.jpg">
    </div>
	<div id="img">
      <img src="doct9.jpg">
    </div>

  </div>
  <div id="after">
  <div id="detail">
  <p> Patient Detail</p>
  </div>
  
  <div id="afterimages">
  Patient Name </br><input type="txt" class="inputbox" placeholder="Mr. Ram Agarwal" required></br></br>
  
  </div>
  <div id="age">
  Age</br><select id="aged" required>
  <optgroup label="Your age">
  <option value="0-12">0-12 years<option>
   <option value="13-18">13-18 years<option>
    <option value="19-59">19-59 years<option>
	 <option value="60 years">60 years and above<option>
	 </select>
	 </optgroup>
  </div>
  
  <div id="afterpat">
	</br>Any Diseases You Have</br>
	<textarea rows="4" cols="25" placeholder="Cancer, diabetes, brain tumor, etc.."required></textarea>
  </div>
  <div id="problem">
  </br>What's Your Problem</br><select id="problemed" required>
  <optgroup label="Problem">
  <option value="fever">Fever<option>
   <option value="bleeding">Bleeding<option>
    <option value="cough">Coughing or Sneezing<option>
	 <option value="body">Body Aches<option>
	 <option value="others">Others<option>
	 </select></br></br>
	 </optgroup>
  </div>
  <div id="consultbutton">
  </br></br><button class="button"> Consult with doctor</button></br>
  </div>
  </div>
  </br></br><div id="icons">
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
  <div id="accordion">
  
		<div id="panels">
		<h2>Allopathic medicine </h2>
		<div>
		<p>Allopathic medicine, or allopathy, refers to science-based, modern medicine,such as the use of medications or surgery to treat or suppress symptoms or the ill effects of disease. There are regional variations in usage of the term. In the United States, the term is used to contrast with osteopathic medicine, especially in the field of medical education. </p>
</div>
<h2>Homeopathy medicine<h2>
<div>
<p>Homeopathy, or Homeopathic Medicine, is the practice of medicine that embraces a holistic, natural approach to the treatment of the sick.  Homeopathy is holistic because it treats the person as a whole, rather than focusing on a diseased part or a labeled sickness.

</p>
  </div>
  <h2>Osteopathic medicine </h2>
  <div>
  <p>Osteopathic medicine is one of the fastest-growing health care professions in the country, with one out of every four medical students enrolled in an osteopathic medical school. Over the past decade, the profession has experienced a 68% increase in the total number of DOs.

 <div>
  </div>
  <div>
    <script>

    var images = ['doct1.jpg', 'doctor3.jpg', 'doct4.jpg', 'doct10.jpg', 'doct6.jpg','doct7.jpg','doct8.jpg','doct9.jpg'];

    var x = 0;

    var imgs = document.getElementById('img');

    setInterval(slider, 2000);


    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";


    }


  </script>
	<script src="jquery-3.5.1.js"></script>
<script src="jqueryui/jquery-ui.js"></script>
<script>

$(document).ready(function()
{
$("#aged").selectmenu({width:150});
$("#problemed").selectmenu({width:150});
$("#panels").accordion({heightStyle:"content"});
});
</script>
</body>
</html>