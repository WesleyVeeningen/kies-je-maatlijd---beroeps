<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_hostname = 'hostname';
$db_username = 'user';
$db_password = 'wachtwoord';
$db_database = 'database';

$mysqli = mysqli_connect($db_hostname, $db_username,$db_password, $db_database);


if (!$mysqli) {
    echo "FOUT: geen connectie naar database <br>";
    echo "Error: " .mysqli_connect_error() . "<br>";
    exit;
}
else {
    echo "Verbindin met " . $db_database . " is gemaakt!<br>";
}