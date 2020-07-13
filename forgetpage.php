<?php
error_reporting(0);
?>
<html>
<head>
<title>Password Recovery-FreeDr.com</title>
<link rel='stylesheet' href='passwordrecovery.css' type='text/css' media='all' />
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


<?php
include('db.php');
if(isset($_POST[email]) && (!empty($_POST[email]))){
$email = $_POST[email];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
  	$error .="<p>Invalid email address please type a valid email address!</p>";
	}else{
	$sel_query = "SELECT * FROM testing WHERE email='".$email."'";
	$results = mysqli_query($con,$sel_query);
	$row = mysqli_num_rows($results);
	$kamal = mysqli_fetch_assoc($results);
	$password=$kamal['password'];
	if (mysqli_num_rows($result) > 0)
{
    $reset_token = time() . md5($email);
}
	}
	if($error!=""){
	echo "<div class='error'>".$error."</div>
	<br /><a href='javascript:history.go(-1)'>Go Back</a>";
		}else{
	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
	$expDate = date("Y-m-d H:i:s",$expFormat);
	$reset_token = time() . md5($email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
$sql = "UPDATE testing SET reset_token='$reset_token' WHERE email='$email'";
mysqli_query($con, $sql);

$output='<p>Dear user,</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output = "Your password is : $password.";
			
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$output.='<p>FreeDr. Services Team</p>';
$body = $output; 
$subject = "Password Recovery - freedr.com";

$email_to = $email;
$fromserver = "noreply@yourwebsite.com"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "meghani58155@gmail.com"; // Enter your email here
$mail->Password = "9314169880"; //Enter your passwrod here
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "noreply@yourwebsite.com";
$mail->FromName = "FreeDr Services";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
	}

		}	

}else{
?>
<form method="post" action="" name="reset"><br /><br />
<div id="login">
<h1>Password Recovery</h1>   
<h4><label><strong>Enter Your Email Address</strong></label></h4>
<input type="email" name="email" class="inputbox" />
<br /><br />
<input type="submit" class="button" value="Reset Password"/>
</div>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>


<br /><br />
</div>
</body>
</html>