<?php
    $marks = array(50, 60, 70, 80);

    for ($i = 0; $i < 5; $i++) {
        // echo "Hello world " . $i;
        // echo "<br>";
    }

    // echo count($marks);
    // die;


    $sum = 0;

    for ($i = 0; $i < count($marks); $i++) {
        echo "Hello world " . $i;
        echo "<br>";
        $sum = $sum + $marks[$i];  //$marks[0]
    }

    echo $sum;
    $average = $sum/count($marks);
    echo "<br>";

    echo $average;

    /* explanation
    i = 0
    0 + 50 = 50
    sum = 50

    i = 1
    50 + 60 = 110
    sum = 110

    i = 2
    110 + 70 = 180
    sum = 180

    i = 3
    180 + 80 = 260
    sum = 260 
    
    
    */
    
?>





