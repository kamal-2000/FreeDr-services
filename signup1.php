<?php
	include('connection.php');
	
	$name=$_[$name];
	$email=$_[$email];
	$password=$_[$password];
	$cpassword=$_[$cpassword];
	$gender=$_[$gender];
	$phone=$_[$phone];
	$state=$_[$state];
	$new_password=$_[$new_password];
	$reset_token=$_[$reset_token];
	
	
	$sql="insert into main(`name`,`email`,`password`,`cpassword`,`gender`,`phone`,`state`,`new_password`,`reset_token`)values('$name','$email','$password','$cpassword','$gender','$phone','$state','$new_password','$reset_token')";
	mysqli_query($sql);
	if(mysqli_query($conn,$sql))
	{
	echo "data creation sucessfully";
	}
	else
	{
	echo"something went wrong";
	}
?>