<?php 
require ("partials/boot.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$query = mysqli_query($db, $sql);
$username = mysqli_fetch_assoc($query)['username'];
if($query){
  $_SESSION['username'] = $username;
  header("Location: logUser.view.php");
}else{
  header("Location: index.php");
}

?>