<!-- This file is what connects the database to the system.-->

<?php
$db['db_host'] = "localhost";
$db['db_user'] = "gameroom";
$db['db_pass'] = "56vHbD";
$db['db_name'] = "gameroom";

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($connection){
  //echo "We are connected";
}

?>
