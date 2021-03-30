<!DOCTYPE html>
<html lang="en">
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
			<script language="javascript">
				function clearData()
				{
					if(confirm("Are you sure you want to clear the checkouts of the database?"))
					{
						<?php
							$query = "TRUNCATE TABLE `checkouts`";
							mysqli_query($connection, $query);
							$query2 = "SELECT * FROM checkouts";
							$result = null;
							$result = mysqli_query($connection, $query2);
							//echo "The Result is $result";
							if(isset($result))
							{
						?>
							
								alert("Emptied the checkouts table and redirecting to dashboard"); 
								window.location.replace("index.php");	
						<?php	
							}
							else 
							{
						?>
									alert("Database was not able to empty.  Redirecting to admin page"); 
									window.location.replace("index.php");
								
						<?php
							}
						?>
					}

          window.location.replace("index.php");

				}

				function ref()
				{
					alert("Redirecting to Admin Dashboard");
					window.location.replace("index.php");
				}
			</script>
			
			<h2>
			
			</h2>
			
			<button type="button" class="btn btn-danger" onclick="clearData()">Yes</button>
				
			
			<button type="button" class="btn btn-success" onclick="ref()">No</button>
			
			</div>
		</div>
		
<?php include "includes/admin_footer.php" ?>
