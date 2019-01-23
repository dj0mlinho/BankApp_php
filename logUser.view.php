<?php 
require("partials/boot.php");
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $sql = "SELECT id,client,deposit,cc FROM users WHERE username='$username' AND id > 2";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo "User Account - $username" ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="jumbotron text-center">
    <h3 class="display-5">Bank App</h3>
    <a href="logUser.view.php" class="btn btn-primary">Accounts</a>
    <a href="addAccount.view.php" class="btn btn-info">Add Account</a>
    <a href="editDeleteAccount.view.php" class="btn btn-warning">Edit/Delete</a>
  </div>
  <div class="container-fluid">
    <div id="mainRow" class="row">
      <div class="col-8 offset-2">
        <h3 class="display-5">Accounts</h3>
        <div class="row">
          <div class="col-10 offset-1">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Deposit</th>
                  <th>Credit Card</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($result as $key => $value):?> 
                <tr>
                  <td><?php echo $value['id'] ?></td>
                  <td><?php echo $value['client'] ?></td>
                  <td><?php echo $value['deposit'] ?></td>
                  <td><?php echo $value['cc'] ?></td>
                </tr>
                <?php endforeach?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>