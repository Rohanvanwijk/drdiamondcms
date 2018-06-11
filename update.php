<?php
require 'db.php';
if(!isset($_SESSION)) {
	session_start();
}

if (isset($_POST['aantal_levels'])) {
	$level = $_POST['aantal_levels'];
	$query = "UPDATE game SET aantal_levels = '$level'";
	$mysqli->query($query);
} else if (isset($_POST['bedrag_don'])) {
	$bedrag = $_POST['bedrag_don'];
	$query = "UPDATE game SET bedrag_don = '$bedrag'";
	$mysqli->query($query);
}


?>