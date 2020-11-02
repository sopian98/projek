<?php
	
	session_start();


	?>
<!DOCTYPE html>
<html>
<head>
	<title>tugas</title>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="container">
 	<div class="header">
		 <h1>ARETA INFORMATIC COLLAGE</h1>
		 <h1>MAHASISWA</h1>
 	</div>
 	<div class="main">
 		<form action="user.php" method="POST">
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" placeholder="username" name="username">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password" placeholder="password" name="password">
 			</span><br>
 				<button>
					<a href="" type="submit" value="login">login</a>
				</button>

 		</form>
 	</div>
 </div>
</body>
</html>
