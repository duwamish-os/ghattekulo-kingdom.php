<?php

$dbhost="localhost";
$username="admin";
$password="admin";

$link = mysql_connect($dbhost, $username, $password);

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully to '. $dbhost;
mysql_close($link);

?>
