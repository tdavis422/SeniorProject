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
				//delares the function fofr clearing the data
				function clearData()
				{
					//asks if the user wants to clear the database
					if(confirm("Are you sure you want to clear the checkouts of the database?"))
					{
						<?php

							//sets query for clearing out the database and executes query
							$query = "TRUNCATE TABLE `checkouts`";
							mysqli_query($connection, $query);

              //doing some error checking
							$query2 = "SELECT * FROM checkouts";
							$result = "This is not the code you are looking for.";
							$result = mysqli_query($connection, $query2);

              //checking if the database is clear
							if(isset($result))
							{
						?>
                //if the database table is cleared then the user will be redirected to the admin index
								alert("Emptied the checkouts table and redirecting to dashboard");
								window.location.replace("index.php");
						<?php
              }//if
							else
							{
						?>
                  //if the database was unable to be emptied the system will tell the user and then redirect to the admin index
									alert("Database was not able to empty.  Redirecting to admin page");
									window.location.replace("index.php");

						<?php
              }//else
						?>
					}//if

				}//cleardata()

				function ref()
				{
          //redirects to the admin index
					alert("Redirecting to Admin Dashboard");
					window.location.replace("index.php");
				}//ref()
			</script>

      <!-- a button that is used to clear the database-->
			<button type="button" class="btn btn-danger" onclick="clearData()">Yes</button>

      <!-- a button that will redirect to the admin index -->
			<button type="button" class="btn btn-success" onclick="ref()">No</button>

			</div>
		</div>

<?php include "includes/admin_footer.php" ?>
