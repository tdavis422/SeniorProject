<?php include("header.html");?>
	
	<body>
		<form action="checkoutEquipment.php" target="_self" method="post">
			<label for="IDNumber">
				<div class=studentID>
					Please Enter/Scan ID
				</div>
			</label>
			<input class=idNumber type="text" name="IDNumber" placeholder="0000000" min="7" max="14" required>
		</form>
	</body>
</html>