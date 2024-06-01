<?php
// Establish a database connection (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Check if the new password and confirm password match
if ($new_password !== $confirm_password) {
    die("New password and confirm password do not match.");
}

// You should add more security measures like hashing passwords before storing them.
// For this example, we'll assume you have a 'users' table with a 'password' column.
// Make sure to hash the password before storing it in a real application.

// Update the password in the database (you may need to modify the SQL query)
$sql = "UPDATE admin SET password = '$new_password' WHERE username ='your_username';

if ($conn->query($sql) === TRUE) {
    echo "Password changed successfully!";
}
 else {
    echo "Error updating password: " . $conn->error;
}

$conn->close();
?>
