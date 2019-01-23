<?php 
require "partials/boot.php";

session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  if (
    isset($_POST['client']) && !empty($_POST['client']) &&
    isset($_POST['deposit']) && !empty($_POST['deposit']) &&
    isset($_POST['cc']) && !empty($_POST['cc']) 
  ) {
    $client = $_POST['client'];
    $deposit = $_POST['deposit'];
    $cc = $_POST['cc'];
  
    $sql = "INSERT INTO users(username, client, deposit, cc) VALUES('$username','$client', '$deposit', '$cc')";
    $query = mysqli_query($db,$sql);
    if ($query) {
      header("Location: logUser.view.php");
     } else {
      echo "Niste dobro popunili!" . $sql;
    }
  } else {
    header("Location: logUser.view.php");
  }
  
  
  
  
  
}
?>