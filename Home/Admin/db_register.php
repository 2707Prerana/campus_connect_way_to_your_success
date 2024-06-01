<?php
session_start();
$conn=mysqli_connect("localhost","root","","miniproject");

if(!$conn)
{
	die("connection Error");
}

?>