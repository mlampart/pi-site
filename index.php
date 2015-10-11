<html>
 <head>
  <title>Michael's Pi</title>
 </head>
 <body>
 <h1> Welcome to Michael's Raspberry Pi!</h1> 
 <a href="shootStill.php">TAKE A PICTURE!</a><br>
 </body>
</html>


<?php

exec("sudo chmod 777 /dev/vchiq");
exec("sudo chmod 777 /var/www");
 
$directory = "";
 
$images = glob("" . $directory . "*.jpg");
 
foreach ($images as $image) {
	echo '<img src="' .$image. '" /> ';
} 

?>
