<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'etask');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etask";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>