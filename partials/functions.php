<?php
function dd($val)
{
  echo"<pre>";
  die(var_dump($val));
  echo"</pre>";
}

function getAll($sql, $db)
{
$query = mysqli_query($sql, $db);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
return $result;
}
?>