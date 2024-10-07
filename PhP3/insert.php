<?php
$l = mysqli_connect("localhost", "root", "", "games");
var_dump($_POST);
if (isset($_POST["game_name"]) && !empty($_POST["game_name"])) {
	$game_name = $_POST["game_name"];
} else {
	die("--- game_name !? ---");
}

$release_date = $_POST["release_date"];
$platform_id = $_POST["platform_id"];
$creator_id = $_POST["creator_id"];
$genre_id = $_POST["genre_id"];

$q = "INSERT INTO `game`(`name`,`release_date`,`platform_id`,`creator_id`,`genre_id`) VALUES('" . $game_name . "','" . $release_date . "','" . $platform_id . "','" . $creator_id . "','" . $genre_id . "')";
//echo("<h1>".$q."</h1>");

$r = mysqli_query($l, $q) or die("ERROR!");


header("Location: index.php?id=2");
