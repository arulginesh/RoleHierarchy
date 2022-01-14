<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
	$roleName = $_POST['roleName'];
	$sql = "INSERT INTO roles (name) VALUES ('".$roleName."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}