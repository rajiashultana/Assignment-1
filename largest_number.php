<?php
//Given three number
$num1 = 4; $num2 = 5; $num3 = 6;
echo"Given three number are : $num1, $num2, $num3\n";

// check largest number among tree number
if($num1>$num2){
    if($num1>$num3){
             echo "$num1 is largest number among three number";
    } else{
            echo "$num3 is largest number among three number";
    }
} else{
    if($num2>$num3){
        echo "$num2 is largest number among three number";
    } else{
        echo "$num3 is largest number among three number";

    }
}