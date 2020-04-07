<?php 

// Database connection
require('db.php');

$id = $_GET['id'];

$sql = "DELETE FROM records where id=$id";

if($connect->query($sql)) {
    // Redirect to home
	header('Location: index.php');
} else {
    echo 'Deletion failed!';
}