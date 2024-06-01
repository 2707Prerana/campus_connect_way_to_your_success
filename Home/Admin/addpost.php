<?php

include('db_register.php');

if(isset($_POST['add_post']))
{
	$jobtitle=$_POST['jobtitle'];
	$description=$_POST['description'];	
	$minimumsalary=$_POST['minimumsalary'];
	$maximumsalary=$_POST['maximumsalary'];
	$experience=$_POST['experience'];
	$qualifiaction=$_POST['qualifiaction'];

	$query="INSERT INTO job_post (jobtitle,description,minimumsalary,maximumsalary,experience,qualifiaction) VALUES('$jobtitle','$description','$minimumsalary','$maximumsalary','$experience','$qualifiaction')";//parameters(prn,Name..) are nothing but database column name
	$query_run=mysqli_query($conn,$query);

	if($query_run)
	{
		$_SESSION['message']="Post Added Successfully";
		header('Location: drives.php');
		exit(0);
	}
	else
	{
		$_SESSION['message']="Something went wrong..!";
		header('Location: drives.php');
		exit(0);
	}
}
