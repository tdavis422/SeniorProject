<?php
ob_start();
session_start();
?>
<?php
  if(isset($_POST['studentID'])){
    $studentID = $_POST['studentID'];
  }

  if ($file = fopen("../Gameroom Database Download.csv", "r")){
    foreach($file as $line){
        list($longID, $shortID, $lname, $fname, $photo) = explode(",", $line);
        if ($studentID === $longID || $studentID === $shortID){
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
