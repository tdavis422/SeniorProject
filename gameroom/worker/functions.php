<!-- This file is saying whether a query passed or failed.-->

<?php

function confirm_query($result){
  global $connection;

  if(!$result){
    die("QUERY FAILED" . mysqli_error($connection));
  }
}

?>
