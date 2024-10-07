<html>

<head>
	<title>All data</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "games";

	$mysqli = mysqli_connect($host, $user, $password, $db);

	$query = "SELECT * FROM game";
	$result = mysqli_query($mysqli, $query);
	?>
	<table border="1">
		<tr>
			<?php
			for ($i = 0; $i < mysqli_num_fields($result); $i++) {
				$fn = mysqli_fetch_field_direct($result, $i);
				echo ("<td><strong>" . $fn->name . "</strong></td>");
			}
			?>
		</tr>

		<?php
		for ($i = 0; $i < mysqli_num_rows($result); $i++) {
			echo ("<tr>");
			$row_array = mysqli_fetch_row($result);
			for ($j = 0; $j < mysqli_num_fields($result); $j++) {
				echo ("<td>" . $row_array[$j] . "</td>");
			}
			echo ("<td>
	<a href=\"delete.php?num=" . $row_array[0] . "\">DELETE</a>
	</td>");
			echo ("</tr>");
		}
		mysqli_free_result($result);
		mysqli_close($mysqli);
		?>
	</table>
</body>

</html>