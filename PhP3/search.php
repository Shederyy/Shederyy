<!DOCTYPE html>
<html lang="en">

    <head>
        <title>game</title>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
        include ("forbase.php");
        $link = @mysqli_connect($h, $u, $p, $db) or die("CONNECT ERROR!");

        $query = "SELECT * FROM game WHERE 1 ";
        if (isset($_POST['game_id']) && !empty($_POST['game_id'])) {
            $query .= "AND game_id='{$_POST['game_id']}' ";
        }
        if (isset($_POST['game_name']) && !empty($_POST['game_name'])) {
            $query .= "AND game_name='{$_POST['game_name']}' ";
        }
        if (isset($_POST['console']) && !empty($_POST['console_id'])) {
            $query .= "AND console_id='{$_POST['console_id']}'";
        }
        if (isset($_POST['console_name']) && !empty($_POST['console_name'])) {
            $query .= "AND console_name='{$_POST['console_name']}' ";
        }
        if (isset($_POST['genre']) && !empty($_POST['genre'])) {
            $query .= "AND genre_id='{$_POST['genre_id']}' ";
        }
        if (isset($_POST['genre_name']) && !empty($_POST['genre_name'])) {
            $query .= "AND genre_name='{$_POST['genre_name']}' ";
        }
        if (isset($_POST['creator_id']) && !empty($_POST['creator_id'])) {
            $query .= "AND creator_id='{$_POST['creator_id']}' ";
        }
        if (isset($_POST['creator_name']) && !empty($_POST['creator_name'])) {
            $query .= "AND creator_name='{$_POST['creator_name']}' ";
        }
        $result = mysqli_query($link, $query);

        echo('<table border="1">');
        echo('    <tr>');
        echo('asd' . mysqli_num_fields($result));
        for ($i = 0; $i < mysqli_num_fields($result); $i++) {
            $fn = mysqli_fetch_field_direct($result, $i);
            echo ("<td><strong>" . $fn->name . "</strong></td>");
        }
        echo('    </tr>');
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            echo ("<tr>");
            $row_array = mysqli_fetch_row($result);
            for ($j = 0; $j < mysqli_num_fields($result); $j++) {
                echo ("<td>" . $row_array[$j] . "</td>");
            }
            echo ("</tr>");
        }
        echo('</table>');
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </body>

</html>