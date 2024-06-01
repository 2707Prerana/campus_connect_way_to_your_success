<?php

include('db_register.php');

if(isset($_POST['add_user']))
{
	$ID=$_POST['ID'];
	$prn=$_POST['prn'];	
	$Name=$_POST['Name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$Status=$_POST['Status']==true ?'1' :'0';

	$query="INSERT INTO applied_user (ID,prn,Name,email,phone_no,Status) VALUES('$ID',$prn','$Name','$email','$phone_no','$Status')";//parameters(prn,Name..) are nothing but database column name
	$query_run=mysqli_query($conn,$query);

	if($query_run)
	{
		$_SESSION['message']="User Added Successfully";
		header('Location: registeredUser.php');
		exit(0);
	}
	else
	{
		$_SESSION['message']="Something went wrong..!";
		header('Location: registeredUser.php');
		exit(0);
	}
}

if(isset($_POST['user_delete']))
{
	$user_id=$_POST['user_delete'];

	$query="DELETE FROM applied_user where ID='$user_id'";
	$query_run=mysqli_query($conn,$query);

	if($query_run)
	{
		$_SESSION['message']="User deleted Successfully";
		header('Location: registeredUser.php');
		exit(0);
	}
	else
	{
		$_SESSION['message']="Something went wrong";
		header('Location: registeredUser.php');
		exit(0);
	}
}



if(isset($_POST['update_user']))
{
	$user_id=$_POST['user_id'];
	$prn=$_POST['prn'];	
	$Name=$_POST['name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$Status=$_POST['Status']==true ?'1' :'0';

	$query ="UPDATE applied_user SET prn='$prn', Name='$Name' ,email='$email', phone_no='$phone_no',Status='$Status' 
	where ID='$user_id' ";

	$query_run=mysqli_query($conn,$query);

	if($query_run)
	{
		$_SESSION['message']="Record Updated Successfully";
		header('Location: registeredUser.php');
		exit(0);
	}
	else
	{
		$_SESSION['message']="Something went wrong";
		header('Location: registeredUser.php');
		exit(0);
	}

}
?>