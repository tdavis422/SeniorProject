<?php
include "db.php";
session_start();
?>

<?php
if(isset($_POST['login'])){
  $username = $_POST['worker_userName'];
  $password = $_POST['user_password'];
  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

  $query = "SELECT * FROM users WHERE username = '{$username}'";
  $select_user_query = mysqli_query($connection, $query);
  if(!$select_user_query){
    die("QUERY FAILED ".mysqli_error($connection));
  }

  while($row = mysqli_fetch_array($select_user_query)){
    $db_user_id = $row['worker_ID'];
    $db_user_name = $row['worker_userName'];
    $db_user_password = $row['user_password'];
    $db_user_firstname = $row['worker_firstName'];
    $db_user_lastname = $row['worker_lastName'];
    $db_user_role = $row['user_role'];
  }
  error_log("db_password:".$db_user_password, 0);

  $password = crypt($password, $db_user_password);

  error_log("   password:".$password, 0);

  if($username === $db_user_name && $password === $db_user_password){
    $_SESSION['worker_userName'] = $db_user_name;
    $_SESSION['worker_firstName'] = $db_user_firstname;
    $_SESSION['worker_lastName'] = $db_user_lastname;
    $_SESSION['user_role'] = $db_user_role;

    header("Location: ../admin");
  }else{
    header("Location: ../index.php");
  }
}
?>
