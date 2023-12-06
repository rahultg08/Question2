<?php 

$myfile=fopen("rush.txt","r")or die("unable to open file");
echo fread($myfile,filesize("rush.txt"));
fclose($myfile);



?>