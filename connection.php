<?php
$servername="localhost";
$username="root";
$password="";
$dbname="freedr";


$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"freedr");


if(!$conn)
{
	die("Connection Failed:".mysqli_error());
}
?>