<!DOCTYPE html>
<html>
<head>
	<title>Matrix Addition using PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

	<div class="container mt-5">
		<h3>Matrix Addition using PHP</h3>

		<?php
			// Define two 2x2 matrices as two-dimensional arrays
			$matrix1 = array(
				array(1, 2),
				array(3, 4)
			);
			$matrix2 = array(
				array(5, 6),
				array(7, 8)
			);

			// Perform matrix addition and store the result in a new array
			$result = array();
			for ($i = 0; $i < 2; $i++) {
				for ($j = 0; $j < 2; $j++) {
					$result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
				}
			}

			// Output the matrices and their sum using Bootstrap table
			echo '
			<div class="row">
				<div class="col-md-4">
					<h5>Matrix 1:</h5>
					<table class="table">
						<tr><td>' . $matrix1[0][0] . '</td><td>' . $matrix1[0][1] . '</td></tr>
						<tr><td>' . $matrix1[1][0] . '</td><td>' . $matrix1[1][1] . '</td></tr>
					</table>
				</div>
				<div class="col-md-4">
					<h5>Matrix 2:</h5>
					<table class="table">
						<tr><td>' . $matrix2[0][0] . '</td><td>' . $matrix2[0][1] . '</td></tr>
						<tr><td>' . $matrix2[1][0] . '</td><td>' . $matrix2[1][1] . '</td></tr>
					</table>
				</div>
				<div class="col-md-4">
					<h5>Sum:</h5>
					<table class="table">
						<tr><td>' . $result[0][0] . '</td><td>' . $result[0][1] . '</td></tr>
						<tr><td>' . $result[1][0] . '</td><td>' . $result[1][1] . '</td></tr>
					</table>
				</div>
			</div>
			';
		?>

	</div>

</body>
</html>
