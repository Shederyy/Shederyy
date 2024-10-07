<html>

<head>
	<title>EDIT</title>
</head>

<body>
	<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "games";
	$mysqli = mysqli_connect($host, $user, $password, $db);

	$n = $_GET['num'];
	$q = "SELECT * FROM game WHERE Pnum=$n";
	$r = mysqli_query($mysqli, $q);

	$ra = mysqli_fetch_array($r, MYSQLI_BOTH);
	?>
	<form action="update.php" method="post">
		No: <input type="text" name="pnum" readonly="readonly" value="<?php echo ($ra['Pnum']); ?>"><br>
		Name: <input type="text" name="pname" value="<?php echo ($ra['Pname']); ?>"><br>
		City:<br>
		<?php
		$q1 = "SELECT id, name FROM games";
		$r1 = @mysqli_query($mysqli, $q1) or die("SELECT ERROR!");

		echo ('<select name="city">');
		while ($d = mysqli_fetch_array($r1, MYSQLI_BOTH)) {
			if ($ra['city'] == $d[0])
				echo ('<option value="' . $d[0] . '"
		selected="delected">' . $d[1] . '</option>');
			else
				echo ('<option value="' . $d[0] . '">' . $d[1] . '</option>');
		}
		echo ('</select>');
		?>
		<br>
		Commission: <br>
		<?php
		$comm = array(0.10, 0.11, 0.12, 0.13, 0.15);
		foreach ($comm as $c) {
			if ($c == $ra['comm'])
				echo ("<input type=\"radio\" name=\"comm\" checked=\"checked\" value=\"" . $c . "\">" . $c . "<br>");
			else
				echo ("<input type=\"radio\" name=\"comm\" value=\"" . $c . "\">" . $c . "<br>");
		}
		?>
		<br>
		<input type="submit">
	</form>
</body>

</html>