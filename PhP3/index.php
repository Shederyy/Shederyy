<!DOCTYPE html>
<html lang="en">
<?php
        session_start();

    include ("functions.php");
    /*
        0 = Show Pictures
        1 = Home
        2 = Search
        3 = Upload
        4 = Insert
        5 = Delete
        6 = Edit
        7 = Login
        8 = Survey
        9 = Results
    */
    $page_id = 1;
    if (isset($_GET['id'])) {
        $page_id = $_GET['id'];
    }

    page_header();
?>

    <body class="body">
    <?php
        main_menu();
        generate_page($page_id);
    ?>
    </body>
</html>