<?php
ob_start();
session_start();
include "db.php";
include "functions.php";
?>
<?php
  if(isset($_POST['studentLogin'])){
    $studentID = $_POST['studentID'];
  }

  $filename='../Gameroom Database Download.csv';
  $result = FALSE;

  $array = [];

  if(($file = fopen("{$filename}", "r")) !== FALSE){
    $numLines = count(file($filename));
    while(($data = fgetcsv($file, $numLines, ",")) !== FALSE){
      $array[] = $data;
    }
  }

  fclose($file);

  for($i = 0; $i < count($array); $i++){
    if ($studentID === $array[$i][0] || $studentID === $array[$i][1]){
      $_SESSION['studentID'] = $studentID;
      header("Location: ../student");
      $result = TRUE;
    }
  }

  if($result === FALSE){
    header("Location: ../index.php");
  }
?>
