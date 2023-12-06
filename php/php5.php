<?php 

$arr1=array("1","3","6","8");
$arr2=array("5","7","10");
print_r(array_chunk($arr1,2));
echo "<br>";
print_r(array_merge($arr1,$arr2));
echo "<br>";
echo (array_product($arr1));
echo "<br>";
array_push($arr1,"blue","green");
print_r($arr1);
// $arr3=array_combine($arr1,$arr2);
// print_r($arr3);
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);

?>