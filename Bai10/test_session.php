<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<title>Document</title>
 </head>
 <body>
 	<?php 
 	echo "Chao ban ".$_SESSION['name']." co tuoi la:".$_SESSION['age'];
 	?>
 	<br>
 	<a href="huy_session.php">Huy session</a>
 </body>
 </html>