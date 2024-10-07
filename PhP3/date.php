<?php
$oldDate = "2024-04-29";

$date = date_create("2024-04-29");
echo date_format($date, "Y/m/d H:i:s");

echo "<hr>";

$newDate = date("d-m-Y", strtotime($oldDate));
echo "$newDate";

echo "<hr>";

$arr = explode('-', $oldDate);
$newDate = $arr[2] . '-' . $arr[1] . '-' . $arr[0];
echo "$newDate";

echo "<hr>";

$newDate = preg_replace("/(\d+)\D+(\d+)\D+(\d+)/", "$3-$2-$1", $oldDate);
echo "$newDate";
?>