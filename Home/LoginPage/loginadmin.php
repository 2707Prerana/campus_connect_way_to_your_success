<?php

//$host="localhost";
$username= $_POST['username'];
$password=$_POST['password'];
//$database="miniproject";

 $con = mysqli("localhost","root","","miniproject");

   if($con->connect_error)
   {
   	 die("database coonection failed:".$con->connect_error);

   }
   else
   {
   	$stmt=$con->prepare("select * from AdminLogin where username=?");
   	$stmt->bind_param("v",$username);
   	$stmt->execute();
   	$stmt_result=$stmt->get_result();
   	if($stmt_result->num_rows>0)
   	{
   		$data=$stmt_result->fetch_assoc();
   		if($data['password']===$password)
   		{
   			<a href="Admin/index.php"></a>
   		}

   	}
   	else
   	{
   		echo"<h2>Invalid Email or password</h2>";
   	}
   }

?>