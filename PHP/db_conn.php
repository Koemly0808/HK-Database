<?php

$servername= "localhost";
$usernmae= "root";
$password = "";

$dbname = "hk_database";

$conn = mysqli_connect($servername, $usernmae, $password, $dbname);

if (!$conn) {
	echo "Connection failed!";
}