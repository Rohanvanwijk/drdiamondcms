<?php
require 'db.php';
if(!isset($_SESSION)) {
	session_start();
}
$username = $mysqli->escape_string($_POST['username']);
$password = $mysqli->escape_string($_POST['password']);

$result = $mysqli->query("SELECT * FROM user WHERE name='$username' AND password='$password'");



if($result->num_rows == 0) {
	$_SESSION['message'] = "Login onjuist";
	$_SESSION['loggedin'] = false;
	header("location: admin.php");
} else {
	$_SESSION['loggedin'] = true;
	//user array
	$user = $result->fetch_assoc();

	$_SESSION['name'] = $user['name'];
	$_SESSION['email'] = $user['email'];
	getGameset();
	getGame_gebruikers();
	header("location: dashboard.php");

}

//game instellingen ophalen uit MYsql db
function getGameset() {
	global $mysqli;
	$query = "SELECT * FROM game";
	$result = $mysqli->query($query);
	if ($result->num_rows > 0) {
		$game = $result->fetch_assoc();
		$_SESSION['aantal_levels'] = $game['aantal_levels'];
		$_SESSION['bedrag_don'] = $game['bedrag_don'];
		$_SESSION['max_score'] = $game['max_score'];
	}
}

function getGame_gebruikers() {
	global $mysqli;
	$query = "SELECT * FROM game_gebruikers";
	$result = $mysqli->query($query);
	$_SESSION['aantalgamegebruikers'] = $result->num_rows;
}
	?>
