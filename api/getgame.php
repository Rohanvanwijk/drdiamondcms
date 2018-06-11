<?php
require '../db.php';

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
getGameSettings();

//get aantal_levels
function getGameSettings() {
  global $mysqli;
  $query = "SELECT * FROM game";
  $result = $mysqli->query($query);
  $game = $result->fetch_assoc();
  echo json_encode($game);
}
?>
