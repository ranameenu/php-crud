<?php

$servername = 'localhost';
$username = 'root';
$password = '12345';
$dbname = 'crud';

// Create Connection
$connect = new Mysqli($servername, $username, $password, $dbname);

if($connect->connect_error) {
	echo 'Connection failed';
} /*else {
	echo 'Connection success';
}*/
