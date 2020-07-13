<?php
	include('connection.php');
	error_reporting(0);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$sql="insert into contact(`name`,`email`,`phone`,`subject`,`message`)values('$name','$email','$phone','$subject','$message')";
	mysqli_query($sql);
	if(mysqli_query($conn,$sql))
	{
	echo "<script type='text/javascript'>alert('Your Account is created sucessfully')</script>";
	}
	else
	{
	echo "<script type='text/javascript'>alert('Something went wrong')</script>";
	}
?>