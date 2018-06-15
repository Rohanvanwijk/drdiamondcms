<?php
require 'db.php';
if(!isset($_SESSION)) {
	session_start();
}

if (isset($_POST['level']) === true && empty ($_POST['level']) === false) {
	$level = $_POST['level'];
	$updatequery = "UPDATE game SET aantal_levels = '$level'";
	$mysqli->query($updatequery);
	selectAll(0);
} else if (isset($_POST['donatie']) === true && empty ($_POST['donatie']) === false) {
	$bedrag = $_POST['donatie'];
	$updatequery = "UPDATE game SET bedrag_don = '$bedrag'";
	$mysqli->query($updatequery);
	selectAll(1);
} else if(isset($_POST['userid']) && empty ($_POST['userid']) === false) {
	$gebruiker = $_POST['userid'];
	insertFBgebruiker($gebruiker);
	echo $gebruiker;
}

function insertFBgebruiker($gebruiker) {
	global $mysqli;

	if(gebruikerbestaatal($gebruiker) === false) {
		$query = "insert into game_gebruikers (userid, score) values ('$gebruiker', 0)";
		$result = $mysqli->query($query);
	}

}

function gebruikerbestaatal($gebruiker) {
	global $mysqli;

	$query = "SELECT * FROM game_gebruikers where userid = '$gebruiker'";
	$result = $mysqli->query($query);
	if($result->num_rows == 0) {
		return false;
	} return true;
}

function selectAll($r) {
	global $mysqli;
	$getquery = "SELECT * FROM game";
	$result = $mysqli->query($getquery);
	$game = $result->fetch_assoc();

	if($r == 0) {
		echo $game['aantal_levels'];
	} else if($r == 1){
		echo $game['bedrag_don'];
	}

}
?>
