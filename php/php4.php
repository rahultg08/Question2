<?php 

$name="MY name is venki";

echo strlen($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo str_repeat($name,100);
echo "<br>";
echo str_replace("venki","venkatesh",$name);


?>