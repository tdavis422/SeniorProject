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
            Do you want to clear the database?
            <small><?=$_SESSION['username']?></small>
          </h1>
		  <script>
			function myFunction()
			{
				var txt;
				if(confirm("Are you sure you want to clear the checkouts of the database?"))
				{
					<?php></?>
					alert("Check-ins have be cleared and redirecting to Admin Dashboard")
					window.location.href = "index.php";
				} else
				{
					alert("Redirecting to Admin Dashboard")
					window.location.href = "index.php";
				}
			}
		  </script>
		  
		  
		  
			<button type="button" onclick="myFunction()">Yes</button>
			
			<a href= "index.php">
			<button>No</button>
<?php>




<?php include "includes/admin_footer.php" ?>
