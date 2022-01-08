<?php

$marks = array(
    array(25,30,40,45),  
    array(30,35,41,40, 25), 
    array(50,55,70,90),  
    array(25,30,40,45) 
);
$sum = 0;
for($i = 0; $i < count($marks); $i++) {
    for($j = 0; $j < count($marks[$i]); $j++) {
        echo $marks[$i][$j];
        echo ",";

        $sum = $sum + $marks[$i][$j];
    }
}
echo $sum;

/*
   1.
   i = 0, j = 0 
   25
   
   i = 0 j = 1
   30

1
*/


?>