//         function result_page()
//         {
//             ?>
//             <div align="center">
//                 <?php
//                 include("forbase.php");
//                 $l = mysqli_connect($h, $u, $p, $db);


//                 $sql = "SELECT son FROM manager";
//                 $result = mysqli_query($l, $sql);

//                 echo ("<table>");


//                 while ($row = mysqli_fetch_assoc($result)) {
//                     echo ("<tr>");
//                     foreach ($row as $value) {
//                         echo ("<td>" . $value . "</td>");
//                     }
//                     echo ("</tr>");
//                 }
//                 echo ("</table>");

//                 mysqli_close($l);
//                 ?>
//             </div>
//         <?php
//         }