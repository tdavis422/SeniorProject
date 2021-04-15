<!-- This file is for what happens when a user log outs of the system.-->

<?php
session_start();

$_SESSION['username'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;
$_SESSION['user_role'] = null;

header("Location: ../index.php");
?>
