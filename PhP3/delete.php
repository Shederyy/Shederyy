<?php

$link = @mysqli_connect("localhost", "root", "", "games") or die("ERROR - " . mysqli_connect_errno());

if (isset($_POST['records']) && is_array($_POST['records'])) {
    foreach ($_POST['records'] as $id) {

        $q = "DELETE FROM game WHERE id=$id";

        mysqli_query($link, $q) or die("ERROR - " . mysqli_connect_errno());
    }
}
mysqli_close($link);

header('Location: index.php?id=5');

?>