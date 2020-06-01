<?php
$host = 'db';
$user = 'root';
$password = 'root';
$db = 'websitePHP';

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error){
	echo 'Connetion error: ' . $conn->connect_error;
}
else{
	echo 'Success';
}
?>