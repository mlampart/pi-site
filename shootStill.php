<?php

$imgname = "image" . date("H_i_s") . ".jpg";

exec("raspistill -o ".$imgname." -w 1024 -h 768");

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}
Redirect('http://192.168.1.5', false);
die();

?>
