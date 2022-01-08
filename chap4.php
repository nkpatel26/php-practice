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
    $name = "niraj";
    $txt = "hello";
   // echo $name . $txt;
   $x = 1;
   $y = 2;
   //echo ($x>$y) ? "this is true" : "this is not true";
   //IF EXAMPLE
   //if($x<$y){echo"morning star";}
   // IF..ELSE EXAMPLE
   $num=3;
   if($num % 2 == 0){echo"number is even";}
   //else{echo"number is odd";}
   $balance=9000;
   $withdrol=11000;
   if($withdrol<=$balance){
       $balance-=$withdrol;
       //echo $withdrol,"rs have been withdrol succesfully";
   }
   //else{echo"!not enough balance";}
   $paisa=16000;
   $upaad = 7800;
   if($upaad<=$paisa){
       $paisa-=$upaad;
      // echo $upaad ,"tame upadiya";
   }
   //else{echo"teri aukaat nahi";}
   $totalno = 490;
   $per = $totalno/500*100;
   echo "your percentage is:" ,  $per;
   echo"<br>" ;
   if($per>=90) {
       echo "A grade";
   } elseif($per>=70)  {
       echo "B grade";
   } elseif($per>=60) {
       echo "C grade";
   } else {
       echo " FAIL";
   }

    
    ?>
</body>
</html>