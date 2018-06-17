<?php
require 'db.php';
session_start();

$oldpassword = $_POST['oldpassword'];
$query = "select * from user";
$result = $mysqli->query($query);
$user = $result->fetch_assoc();

$passwordcheck = password_verify($oldpassword, $user['password']);

if ($passwordcheck == 1) {
  $newpass1 = $_POST['newpass1'];
  $newpass2 = $_POST['newpass2'];
  if ($newpass1 == $newpass2) {
    updatepassword($newpass1);
    $_SESSION['passmessage'] = "Het wachtwoord is gewijzigd.";
    header("location: dashboard.php");
  } else {
    $_SESSION['passmessage'] = "Het nieuwe wachtwoord zijn niet gelijk";
    header("location: dashboard.php");
  }
} else {
  $_SESSION['passmessage'] = "Onjuist oud wachtwoord";
  header("location: dashboard.php");
}


function updatepassword($password)
{
  global $mysqli;
  $hashpassword = password_hash($password, PASSWORD_DEFAULT);
  $query = "update user set password = '$hashpassword'";
  $result = $mysqli->query($query);
}




 ?>
