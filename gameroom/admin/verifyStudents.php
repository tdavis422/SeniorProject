<!--Allows for View All Verify to be able to view the table in a cleaner format-->
<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>

<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Verify Students
            <small><?=$_SESSION['username']?></small>
          </h1>
<?php
if(isset($_GET['source'])){
  $source = $_GET['source'];
}else{
  $source = '';
}//Determines whether a source was found or not

switch($source){
  default:
    include "includes/view_all_verify.php";
    break;
}//Allows the View All Verify to be added into the file
?>
        </div>
      </div>
            <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php" ?>
