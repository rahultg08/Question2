<?php 

function sum($num){
    $sum=0;
    while($num>0){
    //    $num=$num%10;
       $sum+=$num%10;
       $num=$num/10;
    //    echo $sum;
    }
    echo $sum;
}

sum(154);



?>