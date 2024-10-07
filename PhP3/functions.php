<?php

function page_header()
{
    echo ('
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikola\'s Kursova</title>
    <script>
        var pic=new Array("Uni/game1.jpg","Uni/game2.jpg","Uni/game3.jpg","Uni/game4.jpg","Uni/game5.png");
        var num=pic.length;
        var i=0;
        function clickNext()
        {   
            i++;
            checkentry();
            document.curent.src= pic[i];
            
        }
        function clickPrev()
        {   
            i--;
            checkentry();
            document.curent.src= pic[i];
            
        }
        function checkentry()
        {
            if(i>=pic.length)
            {
                i=0;
                document.curent.src= pic[i];
            }
        }
    </script>
    <style>
    .text {
        color: white;
        font-weight: bold;
        }
        .text {
        color: white;
        font-weight: bold;
        }
        .body{
            background-image: url(img/gaming.jpg) ;
            background-size: cover;
            
        }

        a:link{
            text-decoration: none;
        }

        a:visited{
            text-decoration: none;
            color: black;
        }

        .cont {
        max-width: 1050px;
        width: 90%;
        margin: auto;
        }

        .menu{
            width: 100%;
            background-color: purple;
            box-shadow: 0 1px 4px black;
        }

        .menu .menu-cont a:hover {
            font-weight: bolder;
        }

        .menu-cont {
        display: block;
        position: relative;
        height: 60px;
    }

        .menu-cont .checkbox {
            position: absolute;
            display: block;
            height: 32px;
            width: 32px;
            top: 20px;
            left: 20px;
            z-index: 5;
            opacity: 0;
            cursor: pointer;
        }

        .menu-cont .menu-lines {
            display: block;
            height: 26px;
            width: 32px;
            position: absolute;
            top: 17px;
            left: 20px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .menu-cont .menu-lines .line {
            display: block;
            height: 4px;
            width: 100%;
            border-radius: 10px;
            background: black;
        }

        .menu-cont .menu-lines .line1 {
            transform-origin: 0% 0%;
            transition: transform 0.4s ease-in-out;
        }

            .menu-cont .menu-lines .line2 {
            transition: transform 0.2s ease-in-out;
        }

            .menu-cont .menu-lines .line3 {
            transform-origin: 0% 100%;
            transition: transform 0.4s ease-in-out;
        }

        .menu .menu-items {
            overflow: hidden;
            padding-top: 320px;
            height: 33vh;
            width: 100%;
            transform: translate(-150%);
            margin-left: -278px;
            display: flex;
            flex-direction: column;
            transition: transform 0.5s ease-in-out;
            text-align: center;
        }

        .logo {
            position: absolute;
            top: 50px; 
            left: 350px;
            font-size: 2.1rem;
            color: white;
        }

        .menu-cont input[type="checkbox"]:checked ~ .menu-items {
            transform: translateX(0);
        }

        .menu-cont input[type="checkbox"]:checked ~ .menu-lines .line1 {
            transform: rotate(45deg);
        }

        .menu-cont input[type="checkbox"]:checked ~ .menu-lines .line2 {
            transform: scaleY(0);
        }

        .menu-cont input[type="checkbox"]:checked ~ .menu-lines .line3 {
            transform: rotate(-45deg);
        }

        .menu-cont input[type="checkbox"]:checked ~ .logo{
            display: none;
        }
        
        

        table,th,td{
            border: 1px solid black;
            border-radius: 10px;
            background-color: #ccc;
            box-shadow: 0 1px 4px black;
        }
        ul{text-align: center;}
        
        li ul {
           
            position: absolute;
            left: 149px;
            top: 0;
            display: none;
            box-shadow: 0 1px 4px black;
        }

        ul li {
            position: relative;
            display: block;
            text-decoration: none;
            color: black;
            background: #ccc;
            padding: 20px;
            border: 1px, solid #ccc;
            border-bottom: 0px;
            border-radius: 5px;
            box-shadow: 0 1px 4px black;
            top: -55px;
        }

        ul{
           
            margin: 0;
            padding: 0;
            list-style: none;
            width: 150px;
            border-bottom: 1px solid #ccc;
            box-shadow: 0 1px 4px black;
        }

        li:hover ul {display: block;}
        
        .images{
            border: solid 3px black;
            height: 400px;
            width: 400px;
            position: absolute;
        }
    
        
    </style>
</head>
');
}
function opening_navigation_menu()
{
    echo ('
    <nav>
        <div class="menu">
            <div class="cont menu-cont">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="menu-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
                </div>  
            <div class="menu-items">
                <ul>
                    <li> <a href="index.php?id=1">Home</a></li>
                    <li>Login
                        <ul>
                            <li><a href="index.php?id=7">Login</a></li>
                            <li><a href="index.php?id=10">Logout</a></li>
                        </ul>
                    </li>
                    <li>Data Base
                    <ul>
                    <li><a href="index.php?id=2">Search</a></li>
');
}

function auth_user_menu()
{
    if (isset($_SESSION['auth']) && $_SESSION['auth'] == 1) {
        echo (' 
                <li><a href="index.php?id=4">Enter database</a></li>
                <li><a href="index.php?id=6">Edit database</a></li>
                
            ');
    }
}

function closing_navigation_menu()
{

    echo ('
                        </ul>
                            </li>	
                                <li>Gallery
                                    <ul>
                                        <li><a href="index.php?id=3">Add a picture</a></li>
                                        <li><a href="index.php?id=0">Show all pictures in gallery</li> 
                                    </ul>
                                </li>
                                <li>Survey
                                    <ul>
                                        <li><a href="index.php?id=8">Begin survey</a></li>
                                        <li><a href="index.php?id=9">Survey results</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        ');
}


function show_pictures_page()
{
    $udir = "images/";
    $size_bytes = 1048576;
    $types = array('image/gif', 'image/png', 'image/jpg', 'image/jpeg');

    echo ("<div style=\"text-align: center; clear: both\">");
    if ($dh = opendir($udir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != "." || $file != "..") {
                $f = $udir . $file;
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                $ft = finfo_file($finfo, $f);
                finfo_close($finfo);
                if (in_array($ft, $types)) {
                    echo "
                                <a href=\"$udir$file\">
                                <img src=\"$udir$file\" style=\"width: 200px; height: 200px;\" alt=\"\"/>
                                </a>";
                }
            }
        }
        closedir($dh);
    }
    echo ("</div>");
}

// 1
function home_page()
{
    echo (
        '<div class="logo">
            <h1>Welcome To My Video Games Project!</h1>
        </div>'
    );
}
// 2
function search_page()
{
    echo ('<div align = "center"');
    echo ('<div class = "text">');
    echo (' <form action="index.php?id=2" method="post">');
    //echo ('     <lable> Number of game: </label>');
    //echo ('     <input type="number" name="game_id" min="1" max="10" step="1">');
    //echo ('     <br><br>');
    echo ('     <lable> Name of game: </lable>');
    echo ('     <input name="game_name" type="text">');
    echo ('     <br><br>');
    //echo ('     <lable> Name of creator </label>');
    //echo ('     <input type="creator_name" name="creator"');
    //echo ('     min="100" max="106" step="1"> ');
    // echo ('     <br><br> ');
    echo ('     <lable> Name of console: </lable>');
    echo ('     <input type="console_name" name="device"');
    echo ('     min="20" max="40" step="1">');
    echo ('     <br><br>');
    //echo ('     <lable> Name of Genre </label>');
    //echo ('     <input type="name_genre" name="genre"');
    //echo ('     min="20" max="50" step="1">');
    //echo ('     <br><br>');
    echo ('     <input type="submit" name="Submit" value="Send">');
    echo ('     <input type="reset" name="Reset" value="Reset">');
    echo (' </form>');
    echo ('</div>');

    include ("forbase.php");
    $link = @mysqli_connect($h, $u, $p, $db) or die("CONNECT ERROR!");

    $query = "SELECT id, name FROM game";
    $r = @mysqli_query($link, $query) or die("SELECT ERROR!");
    echo ('</select>');

    mysqli_close($link);
}

// 3
function upload_page()
{
    echo ('<form 
            enctype="multipart/form-data"
            action="upload.php"
            method="post">
            <input type="hidden"
                name="MAX_FILS_SIZE"
                value="1000000">
            Upload this file:
                <input name="uf" type="file" accept="image/*">
                <input type="submit" value="Send File">
            </form>
        ');
}

// 4
function insert_page()
{
    echo ('<div class = "text"');
    echo ('<div align="center">');
    echo ('<form action="insert.php" method="post">');
    echo ('<lable> Number of game: </lable>');
    echo ('<input type="number" name="game_id"');
    echo ('min="1" max="10" step="1" value="1">');
    echo ('<br><br>');
    echo ('<lable> Name of game: </lable>');
    echo ('<input name="game_name" type="text">');
    echo ('<br><br>');
    echo ('<lable> Number of console </lable>');
    echo ('<input type="number" name="console_id"');
    echo ('min="1" max="10" step="1" value="1">');
    echo ('<br><br>');
    echo ('<lable> Release Date </lable>');
    echo ('<input type="date" name="release_date">');
    echo ('<br><br>');
    echo ('<lable> Number of Platform </lable>');
    echo ('<input type="number" name="platform_id"');
    echo ('min="1" max="7" step="1" value="1">');
    echo ('<br><br>');
    echo ('<lable> Name of console: </lable>');
    echo ('<input name="console" type="text">');
    echo ('<br><br>');
    echo ('<lable> Number of genre:</lable>');
    echo ('<input type="number" name="genre_id"');
    echo ('min="1" max="7" step="1" value="1">');
    echo ('<br><br>');
    echo ('<lable> Name of genre:</lable>');
    echo ('<input name="genre_name" type="text">');
    echo ('<br><br>');
    echo ('<lable> Number of creator:</lable>');
    echo ('<input type ="number" name="creator_id"');
    echo ('min="1" max="7" step="1" value="1">');
    echo ('<br><br>');
    echo ('<lable> Name of creator:</lable>');
    echo ('<input name="creator_name" type="text">');
    echo ('<br><br>');
    echo ('<input type="submit" value="Изпрати">');
    echo ('<input type="reset" name="Reset" value="Изчисти">');
    echo ('</form>');
    echo ('</div>');
    echo ('</div>');

    include ("forbase.php");
    $link = @mysqli_connect($h, $u, $p, $db) or die("CONNECT ERROR!");
}



function delete_page()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "games";

    $mysqli = mysqli_connect($host, $user, $password, $db);

    $query = "SELECT * FROM game";
    $result = mysqli_query($mysqli, $query);

    echo ('<div align="center">');
    echo ('<form action="delete.php" method="post">');
    echo ('<table border="1">');
    echo ('<tr>');
    for ($i = 0; $i < mysqli_num_fields($result); $i++) {
        $fn = mysqli_fetch_field_direct($result, $i);
        echo ("<td><strong>" . $fn->name . "</strong></td>");
    }
    while ($row = mysqli_fetch_array($result)) {
        echo ("<tr>");
        for ($j = 0; $j < mysqli_num_fields($result); $j++) {
            echo ("<td>" . $row[$j] . "</td>");
        }
        echo ('<td><input type="checkbox" name="records[]" value="' . $row[0] . '"></td>');
        echo ("</tr>");
    }

    echo ('</table>');
    echo ('<button type="submit"> Delete Selected </button>');
    echo ('</form>');
    echo ('<div>');
}

// 6
function edit_page()
{

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "games";

    $mysqli = mysqli_connect($host, $user, $password, $db);

    $query = "SELECT * FROM game";
    $result = mysqli_query($mysqli, $query);
    echo ('<div align="center">');
    echo ('<table border="1">');
    echo ('<tr>');
    for ($i = 0; $i < mysqli_num_fields($result); $i++) {
        $fn = mysqli_fetch_field_direct($result, $i);
        echo ("<td><strong>" . $fn->name . "</strong></td>");
    }
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        echo ("<tr>");
        $row_array = mysqli_fetch_row($result);
        for ($j = 0; $j < mysqli_num_fields($result); $j++) {
            echo ("<td>" . $row_array[$j] . "</td>");
        }
        echo ("<td><a href=\"index.php?id=5&num=" . $row_array[0] . "\">EDIT</a></td>");
        echo ("</tr>");
    }

    if (isset($_GET['num'])) {

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "games";
        $mysqli = mysqli_connect($host, $user, $password, $db);

        $n = $_GET['num'];
        $q = "SELECT * FROM game WHERE game_id=$n";
        $r = mysqli_query($mysqli, $q);
        $ra = mysqli_fetch_array($r, MYSQLI_BOTH);

        echo ('<form action="update.php" method="post">');
        echo ('Game Number: <input type="text" name="game_id" readonly="readonly" value="');
        echo ($ra['game_id']);
        echo ('"><br>');
        echo ('Name: <input type="text" name="game_name" value="');
        echo ($ra['game_name']);
        echo ('"><br>');
        echo ('Genre:<br>');
        $q1 = "SELECT genre_id, genre_name FROM game";
        $r1 = @mysqli_query($mysqli, $q1) or die("SELECT ERROR!");
        echo ('<select name="genre">');

        while ($d = mysqli_fetch_array($r1, MYSQLI_BOTH)) {
            if ($ra['game'] == $d[0]) {
                echo ('<option value="' . $d[0] . '" selected="selected">' . $d[1] . '</option>');
            } else {
                echo ('<option value="' . $d[0] . '">' . $d[1] . '</option>');
            }
        }

        echo ('</select>');
        echo ('<br>');
        echo ('Console: <input type="text" name="console" value="');
        echo ($ra['console']);
        echo ('"><br>');
        echo ('<br>');
        echo ('Creator: <input type="text" name="creator" value="');
        echo ($ra['creator']);
        echo ('"><br>');
        echo ('<br>');
        echo ('<input type="submit">');
        echo ('</form>');
    }
}

// 7
function login_page()
{
    echo ('<div class = "text"');
    echo ('<div align="center">');
    echo ('<form method="POST" action="login.php">');
    echo ('<br>User ID:<br>');
    echo ('<input type="text" name="user"><br>');
    echo ('<br>Password:<br>');
    echo ('<input type="password" name="pass"><br><br>');
    echo ('<input type="submit" value="Login">');
    echo ('</form>');
    echo ('</div>');
}

function begin_survey_page()
{
    ?>
    <div align="center" , class="text">
        <form action="survey.php" method="post">
            <label for="game">What's your favorite game?</label><br>
            <input type="radio" id="game1" name="game" value="game1">
            <label for="game1">God Of War</label><br><br>
            <input type="radio" id="game2" name="game" value="game2">
            <label for="game2">Elden Ring</label><br><br>
            <input type="radio" id="game3" name="game" value="game3">
            <label for="game3">Gran Turismo</label><br><br>
            <input type="radio" id="game3" name="game" value="game3">
            <label for="game3">Insert Game Here</label><br><br>
            <input type="radio" id="game3" name="game" value="game3">
            <label for="game3">Insert Game Here</label><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
}

function result_page()
{

    $results = file_get_contents("php://input");
    $results_array = json_decode($results, true);
    echo "Your favorite game is: " . $results_array["favorite_game"];

    result_page();

}


// 10
function logout()
{
    $_SESSION = array();
    session_destroy();
}

function main_menu()
{
    opening_navigation_menu();
    auth_user_menu();
    closing_navigation_menu();
}

function generate_page($page_id)
{
    //Show Pictures
    if ($page_id == 0) {
        show_pictures_page();
    }
    // Home
    else if ($page_id == 1) {
        home_page();
    }
    // Search
    else if ($page_id == 2) {
        search_page();
    }
    // Upload
    else if ($page_id == 3) {
        upload_page();
    }
    // Insert
    else if ($page_id == 4) {
        insert_page();
    }
    // Delete
    //else if ($page_id == 5) {
    //delete_page();
    //}
    // Edit
    else if ($page_id == 6) {
        edit_page();
    }
    // Login
    else if ($page_id == 7) {
        login_page();
    }
    // Survey
    else if ($page_id == 8) {
        begin_survey_page();
    }
    // Results
    // else if ($page_id == 9) {
    //     result_page();
    // }
    // Logout
    else if ($page_id == 10) {
        logout();
    }
}
// User: admin
// Pass: *81A32A5F96B9B86F867