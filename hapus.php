<?php 
include_once 'config.php';
$id = $_GET['id'];

$result = mysqli_query($mysqli,
		"DELETE from login  WHERE id=$id"
		);
echo "User already deleted";
header("Location: index.php");


 ?>