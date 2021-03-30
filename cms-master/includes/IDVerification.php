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
    while(!feof($IDverify))
    {
      foreach($lines as $line){
        list($longID, $shortID, $lname, $fname, $photo) = explode(",", $IDverify);
        if($studentID === $longID || $studentID === $shortID){
          IDmatch();
        }
      }
    }
    header("Location: ../index.php");
  fclose($IDverify);
?>
