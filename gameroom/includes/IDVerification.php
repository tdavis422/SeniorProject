<!-- This file is to allow the system to verify IDs of students.-->

<?php
ob_start();
session_start();
include "db.php";
include "functions.php";
?>
<?php
  if(isset($_POST['studentLogin'])){
    $numID = $_POST['studentID'];
  }

  $studentID = (string)$numID;
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
