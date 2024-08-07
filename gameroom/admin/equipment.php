<!--Checks for what choice the user chose-->
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
            Equipment
          </h1>
<?php
if(isset($_GET['source'])){
  $source = $_GET['source'];
}else{
  $source = '';
}//Determines whether a source was found or not

switch($source){
  case 'add_equipment':
    include "includes/add_equipment.php";
    break;
  case 'sanitize':
	  include "includes/sanitize_equipment.php";
    break;
  case 'edit':
    include "includes/edit_equipment.php";
    break;
  case 'remove':
    include "includes/remove_equipment.php";
    break;
  case 'add_type':
    include "includes/add_equipment_type.php";
    break;
  case 'damaged':
    include "includes/damaged_equipment.php";
    break;
  default:
    include "includes/view_all_equipment.php";
    break;
}//Adds specific files to what the source has in the URL
?>
        </div>
      </div>
            <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php" ?>
