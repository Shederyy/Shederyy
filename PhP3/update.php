<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "games";
$mysqli = mysqli_connect($host, $user, $password, $db);

$Game_Number = $_POST['game_id'];
$Game_Name = $_POST['game_name'];
$Creator = $_POST['Creator'];
$Genre = $_POST['Genre'];
$Console = $_POST['Console'];

$q = "
UPDATE store 
SET name='$Store_Name', creator=$Creator, genre_id=$Genre, console=$Console, 
WHERE id=$Game_Number";
//echo($q);
$r = @mysqli_query($mysqli, $q) or die("UPDATE ERROR!");

header('Location: index.php?id=6');
