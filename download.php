<?php
$file = $_GET['file']."pdf";
header("content-disposition : attachment; filename=". urlencode($file));
$fb= fopen($file, "r");
while(!feof($file)){
	echo fread($fb, 8192);
flush();
}
fclose($fb);
?>