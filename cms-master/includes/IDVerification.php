<?php
  if(isset($_POST['studentID'])){
    $studentID = $_POST['studentID'];
  }

  $IDverify = fopen("../Gameroom_Database_Download.csv", "r") or die("Unable to open file!");
    while(!feof($IDverify))
    {
      
    }
  fclose($IDverify);
?>
