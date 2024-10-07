<?php
session_start();
include ("forbase.php");
$mysqli = mysqli_connect($h, $u, $p, $db);

$form_username = $_POST['user'];
$form_password = $_POST['pass'];
$form_password = trim($mysqli->real_escape_string($form_password));

$query = "
            select username
            from users
            where username='$form_username'
            and password='$form_password'
        ";

$result = $mysqli->query($query);
$rows = $result->num_rows;

if ($rows == 1) {
    $_SESSION['auth'] = 1;
    $row = $result->fetch_array(MYSQLI_BOTH);
    $_SESSION['username'] = $form_username;
    header('Location: index.php?id=1');
} else {
    header('Location: index.php?id=7');
}
