<html>
	<head>
	<title>Retrieve data from database </title>
	</head>

	<body>

	<?php

		// Create connection (DON'T TOUCH)
		$conn = new mysqli(null, 'root', '', 'mysql', null, '/cloudsql/hack-bnmp:sqlserver');
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		
		// String that will tell mysql to pull data from all fields in helloWorld
		$sql = "select * from helloWorld;";
		
		// pulls data from all fields
		$result = $conn->query($sql);
		



		$conn->close();
	?>
	
	</body>
	
</html>
	
