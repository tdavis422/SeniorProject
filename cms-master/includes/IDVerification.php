<?php
ob_start();
session_start();
include "db.php";
include "functions.php";
?>
<?php
  if(isset($_POST['studentID'])){
    $studentID = $_POST['studentID'];
  }

  if ($file = fopen("../Gameroom Database Download.csv", "r")){
    foreach($file as $line){
      $IDverify = fgetcsv($line);

      if ($studentID === $IDverify[0] || $studentID === $IDverify[1]){
        $_SESSION['studentID'] = $studentID;
        fclose($line);
        header("Location: ../student");
      }
    }
  } else{
    die("File can't be opened");
  }

  header("Location: ../index.php");
?>
