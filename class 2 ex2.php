<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name= "princy";
    $class = "12th" ;
    $phy = 76;
    $chem = 85;
    $math = 91;
    $eng = 88;
    $hindi= 78;
    $total= $phy + $chem + $math + $eng + $hindi;
    $percentage = $total/500*100;
    echo "student name is =$name<br>";
    echo "student class is =$class<br>";
    echo "student total marks is =$total<br>";
    echo "student percentage is =$percentage<br>";
       ?>
</body>
</html>