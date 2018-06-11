<?php
require 'db.php';
if(!isset($_SESSION)) {
	session_start();
}
$username = $mysqli->escape_string($_POST['username']);
$password = $mysqli->escape_string($_POST['password']);

$result = $mysqli->query("SELECT * FROM user WHERE name='$username' AND password='$password'");



if($result->num_rows == 0) {
	$_SESSION['message'] = "Gebruiker bestaat niet";
	
	header("location: error.php");
} else {
	//user array
	$user = $result->fetch_assoc();
	
	$_SESSION['name'] = $user['name'];
	$_SESSION['email'] = $user['email'];
	getGameset();
	header("location: dashboard.php");

}

function getGameset() {
	global $mysqli;
	$query = "SELECT * FROM game";
	$result = $mysqli->query($query);
	if ($result->num_rows > 0) {
		$game = $result->fetch_assoc();
		$_SESSION['aantal_levels'] = $game['aantal_levels'];
		$_SESSION['bedrag_don'] = $game['bedrag_don'];
	}
}


?>
