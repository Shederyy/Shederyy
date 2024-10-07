<?php
$link = @mysqli_connect("localhost", "root", "", "games");

$v = $_GET['vote'];
$q = "UPDATE game SET vote=vote+1 WHERE id=$v";
//echo($q);
mysqli_query($link, $q);
$q = 'SELECT id, name, vote FROM game';
$r = mysqli_query($link, $q);

$num = mysqli_num_rows($r);

$total_votes = 0;
while ($row = mysqli_fetch_array($r, MYSQLI_BOTH)) {
    $total_votes += $row['vote'];
}
mysqli_data_seek($r, 0);

$width = 550;
$lm = 50;
$rm = 50;
$bh = 40;
$bs = $bh / 2;
$font = "C:\Windows\Fonts\arial.ttf";
$title_s = 16;
$main_s = 10;
$small_s = 12;
$text_indent = 10;

$x = $lm + 60;
$y = 50;
$bu = ($width - ($x + $rm)) / 100;
$height = $num * ($bh + $bs) + 50;

$im = imagecreate($width, $height);

$white = ImageColorAllocate($im, 255, 255, 255);
$blue = ImageColorAllocate($im, 0, 0, 255);
$black = ImageColorAllocate($im, 0, 0, 0);
$red = ImageColorAllocate($im, 255, 0, 0);

$text_color = $black;
$percent_color = $black;
$bg_color = $white;
$line_color = $black;
$bar_color = $blue;
$number_color = $red;

ImageFilledRectangle($im, 0, 0, $width, $height, $bg_color);
ImageRectangle($im, 0, 0, $width - 1, $height - 1, $line_color);

ImageLine($im, $x, $y - 5, $x, $height - 15, $line_color);

$title = 'Poll Results';
$td = ImageTTFBBox($title_s, 0, $font, $title);
$title_length = $td[2] - $td[0];
$title_height = abs($td[7] - $td[1]);
$title_above_line = abs($td[7]);
$title_x = ($width - $title_length) / 2;
$title_y = ($y - $title_height) / 2 + $title_above_line;
ImageTTFText(
    $im,
    $title_s,
    0,
    $title_x,
    $title_y,
    $text_color,
    $font,
    $title
);

while ($row = mysqli_fetch_array($r, MYSQLI_BOTH)) {
    if ($total_votes > 0)
        $p = intval(round(($row['vote'] / $total_votes) * 100));
    else
        $p = 0;
    ImageTTFText(
        $im,
        $main_s,
        0,
        $width - 30,
        $y + ($bh / 2),
        $percent_color,
        $font,
        $p . '%'
    );

    if ($total_votes > 0)
        $right_value = intval(round(($row['vote'] / $total_votes) * 100));
    else
        $right_value = 0;

    $bl = $x + ($right_value * $bu);

    ImageFilledRectangle($im, $x, $y - 2, $bl, $y + $bh, $bar_color);


    ImageTTFText(
        $im,
        $main_s,
        0,
        $text_indent,
        $y + ($bh / 2),
        $text_color,
        $font,
        $row['name']
    );

    ImageRectangle(
        $im,
        $bl + 1,
        $y - 2,
        ($x + (100 * $bu)),
        $y + $bh,
        $line_color
    );

    ImageTTFText(
        $im,
        $small_s,
        0,
        $x + (100 * $bu) - 50,
        $y + ($bh / 2),
        $number_color,
        $font,
        $row['vote'] . '/' . $total_votes
    );

    $y = $y + ($bh + $bs);
}
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
