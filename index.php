<?php

//1. A Reusable  PHP Function that can check Even & Odd Number And Return Decision:

function evenOrOdd ($num){
    if ($num % 2 == 0){
        return "Even Number";
    }elseif ($num % 2 != 0){
        return "Odd Number";
    }
}


echo evenOrOdd(101);


// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series:

$sum = 0;
for ($i = 1; $i <= 100; $i++){
   $sum += $i;
}

echo $sum;