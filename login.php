<?php
require 'db.php';
session_start();

$_SESSION['username'] = $mysqli->escape_string($_POST['username']);
$_SESSION['password'] = $mysqli->escape_string($_POST['password']);

$username = $_SESSION['username'];
$password = $_SESSION['password'];

$result = $mysqli->query("SELECT * FROM user WHERE name='$username' AND password='$password'");

if($result->num_rows == 0) {
	$_SESSION['message'] = "Gebruiker bestaat niet";
	header("location: error.php");
} else {
	//user array
	$user = $result->fetch_assoc();
	print_r($user);

	$_SESSION['username'] = $user['user_name'];
	$_SESSION['fullname'] = $user['full_name'];
	$_SESSION['email'] = $user['email'];
	$_SESSION['score'] = $user['score'];

	header("location: dashboard.php");

}


?>