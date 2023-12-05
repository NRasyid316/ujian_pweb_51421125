<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db_name = 'mydb';

$hubung = new mysqli($host, $user, $pwd, $db_name);
if ($hubung->connect_error) {
    die("Connection failed: " . $hubung->connect_error);
} else {
    echo "Connected successfully";
}



?>
