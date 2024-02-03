<!DOCTYPE html>
<html>
<head>
	<title>Associative Arrays and Foreach Loop in PHP</title>
</head>
<body>

	<?php
		// Define an associative array with some key-value pairs
		$employee = array(
			"name" => "David",
			"age" => 25,
			"salary" => 50000,
			"position" => "Manager"
		);

		// Display the values of the associative array using foreach loop
		echo "<h3>Employee Information:</h3>";
		echo "<ul>";
		foreach ($employee as $key => $value) {
			echo "<li><strong>" . $key . ":</strong> " . $value . "</li>";
		}
		echo "</ul>";
	?>

</body>
</html>
