<?php include "includes/student_header.php" ?>
<!-- This code will allow the student to select a xbox and scan the barcode, which will then input it in the system as that person checking it out -->
<div id="wrapper">

<?php include "includes/student_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            <small><?=$_SESSION['studentID']?></small>
          </h1>
        </div>
      </div>

      <div class="well">
        <h4>Scan equipment barcode:</h4>
        <form action="add_student.php" method="post">
          <div class="form-group">
            <input name="xbox" type="text" class="form-control" autofocus/>
          </div>
          <span class="input-group-btn">
            <button name="submitXbox" class="btn btn-primary" type="submit">
              Submit
            </button>
          </span>
        </form><!--search form-->
      </div>

    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include "includes/student_footer.php" ?>
