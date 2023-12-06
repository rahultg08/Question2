<?php 

function p($a,$n,$i){
    if($n!=$i){
        echo $a[$i];
        $i++;
        p($a,$n,$i);
    }
}
$arr=array("1","3","3");
p($arr,sizeof($arr),0);
?>