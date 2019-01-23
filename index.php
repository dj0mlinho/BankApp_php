

<?php 
$title = "Home Page";
require("partials/head.php");

?>
</div>
<div class="container">

<div class="row">
<div class="col-4 offset-4">
<h4 class="text-center mb-5">Enter your info</h4>
<form action="logUser.php" method="post">
<input type="text" name="username" placeholder="username" class="form-control"><br>
<input type="password" name="password" placeholder="password" class="form-control"><br>
<button class="btn btn-success form-control">Login</button>
</form>

</div></div>
</div>