<?php
$email = "user_name@domain.com";

preg_match_all("/^(.+)@[^@]+$/", $email, $e1);
echo "{$e1[1][0]}";

echo ("<hr>");

$user = strstr($email, '@', true);
echo ($user);

echo ("<hr>");

$user = implode('@', explode('@', $email, -1));
echo ($user);

echo ("<hr>");

$user = substr($email, 0, strrpos($email, '@'));
echo ($user);

echo ("<hr>");

$explode = explode("@", $email);
array_pop($explode);
$newstring = join('@', $explode);
echo $newstring;

echo ("<hr>");

$prefix = substr($email, 0, strrpos($email, '@'));
echo ($prefix);

?>