<?php
session_start();
$db = "mydb";
$servername = "localhost";
$user = "my";
$pass = "yes";
$username = $_POST["username"];
$password = $_POST["password"];


$conn = mysqli_connect($servername,$user,$pass,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT username,password FROM details";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_assoc($result);

if($check["username"] == $username && $check["password"] == $password)
{mysqli_close($conn);
	header("Location: welcome.php");
}
else{mysqli_close($conn);
$_SESSION['error'] = 1;
	header("Location: login.php");
	}
?>