<?php 
require "partials/boot.php";
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo "Add Account - $username" ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="jumbotron text-center">
    <h3 class="display-5">Bank App</h3>
    <a href="logUser.view.php" class="btn btn-primary">Accounts</a>
    <a href="addAccount.php" class="btn btn-info">Add Account</a>
    <a href="editDeleteAccount.view.php" class="btn btn-warning">Edit/Delete</a>
  </div>
  <div class="container-fluid">
    <div id="formRow" class="row">
    <div class="col-8 offset-2">
      <h3 class="display-5">Add Account</h3>
      <div class="row">
        <div class="col-10 offset-1">
          <form action="addAccount.php" method="post">
            <input type="text" placeholder="client" class="form-control" name="client"><br>
            <input type="text" placeholder="deposit" class="form-control" name="deposit"><br>
            <input type="text" placeholder="credit card" class ="form-control" name="cc"><br>
            <button class="btn btn-primary form-control" type="submit">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>