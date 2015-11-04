<html>
 <head>
  <title>Michael's Pi</title>
 </head>
<style>
 div.img {
    margin: 5px;
    padding: 5px;
    height: auto;
    width: auto;
    float: left;
    text-align: center;
    position: relative;
 }
</style>
 <body>
 <h1> Welcome to Michael's Raspberry Pi!</h1> 
 <h2>
	<a href="shootStill.php">TAKE A PICTURE</a>
 </h2>
 </body>
</html>


<?php

exec("sudo chmod 777 /dev/vchiq");
exec("sudo chmod 777 /var/www");

if (array_key_exists('delete_file', $_POST)) {
  $filename = $_POST['delete_file'];
  if (file_exists($filename)) {
    unlink($filename);
  } 
}
 
$directory = "";
 
$images = glob("" . $directory . "*.jpg");
 
foreach ($images as $image) {
	echo '<div class="img">';
	echo '<a href="' .$image. '"><img src="' .$image. '" onload="this.width*=0.5;this.onload=null;"/> ';
	echo '<form method="post">';
	echo '<input type="hidden" value="'.$image.'" name="delete_file" />';
	echo '<input type="submit" value="Delete image" />';
	echo '</form></a>';
	echo '</div>';
} 

?>
