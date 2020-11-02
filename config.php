<?php

session_start();


$databaseHost = 'localhost';
$databaseName = 'db_perpustakaan';
$databaseUsername = 'root';
$databasepassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasepassword, $databaseName);



?>