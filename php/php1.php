<?php 

function fact($num){
if($num==0 || $num==1){
    echo "1";
}
else{
    $fact=1;
    while($num>0){
        $fact=$fact*$num;
        $num--;
    }
    echo $fact;
}
}
fact(5);

?>