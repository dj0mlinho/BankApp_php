<?php 
require "partials/boot.php";
session_start();

  if (
    isset($_POST['client']) && !empty($_POST['client']) &&
    isset($_POST['deposit']) && !empty($_POST['deposit']) &&
    isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['cc']) && !empty($_POST['cc']) 
  ) {
    
    $id = $_POST['id'];
    $client = $_POST['client'];
    $deposit = $_POST['deposit'];
    $cc = $_POST['cc'];
  
    $sql = "UPDATE users SET client = '$client', deposit = '$deposit', cc = '$cc' WHERE id='$id'";
    $query = mysqli_query($db,$sql);
    if ($query) {
      header("Location: logUser.view.php");
     } else {
      echo "Niste dobro popunili!" . $sql;
    }
  } else {
    header("Location: logUser.view.php");
  }
?>