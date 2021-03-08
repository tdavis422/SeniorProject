<?php include "includes/worker_header.php" ?>
<?php include "functions.php" ?>

<div id="wrapper">

<?php include "includes/worker_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome 
            <small><?=$_SESSION['username']?></small>
          </h1>
<?php
if(isset($_GET['source'])){
  $source = $_GET['source'];
}else{
  $source = '';
}

switch($source){
  case 'add_post':
    include "includes/add_post.php";
    break;
  default:
    include "includes/view_all_comments.php";
    break;
}
?>
        </div>
      </div>
            <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/worker_footer.php" ?>
