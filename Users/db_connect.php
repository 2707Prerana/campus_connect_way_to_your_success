<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "miniproject";

// Create a database connection
$conn =  mysqli_connect($server, $username, $password, $database);

// Check the connection
if ($conn) {
    echo "success";
}
else
{
    die("Connection failed: " . $conn->connect_error);
}
    

?>