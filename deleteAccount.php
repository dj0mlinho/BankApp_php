<?php 
require "partials/boot.php";
$id = $_GET['id'];
session_start();
$sql = "DELETE FROM users WHERE id='$id'";
$query = mysqli_query($db,$sql);
if($query){
  header("Location: editDeleteAccount.view.php");
}else{
  echo "wrong" .$sql;
}
?>