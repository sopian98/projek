<?php

include 'config.php';


$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($mysqli, "select * from identitas where username='$username' and password='$password'");
$cek = mysqli_num_rows($result);
if ($cek == 0)
	echo "Username atau Password Salah";
else
	echo "<script>window.open('index.php','_self')</script>";


?>