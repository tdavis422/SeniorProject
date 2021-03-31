<?php
ob_start();
session_start();
?>
<?php
  if(isset($_POST['studentID'])){
    $studentID = $_POST['studentID'];
  }

  function IDmatch(){
    $_SESSION['studentID'] = $studentID;
    $_SESSION['photo'] = $photo;
    header("Location: ../student");
  }

  $IDverify = fopen("../Gameroom_Database_Download.txt", "r") or die("Unable to open file!");
  $lines = explode("\n", $IDverify);
  foreach($lines as $line){
    echo $line . '<br>';
  }

  //header("Location: ../index.php");
  fclose($IDverify);
?>
