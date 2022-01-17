<?php
/*for($i = 1; $i <= 5; $i++){
    echo "<br>";
    for($j = 1; $j <= $i; $j++) {
      echo '*' . ' ';
    }
}

//EXAMPLE-2( PROGRAME TO PRINT HALF PYRAMID A USING NUMBER)

for($i = 1; $i <= 5; $i++){
    echo "<br>";
    for($j = 1; $j <= $i; $j++) {
      echo $J . ' ';
    }
}

//EXAMPLE-3 (PROGRAME TO PRINT HALF PYRAMID USING ALFHABATE)


for($i = 1; $i <= 5; $i++){
    echo "<br>";
    for($j = 1; $j <= $i; $j++) {
    //   echo $j . ' ' ;
        if ($i == 1 ) {
            echo "a" ;
        } elseif ($i==2) {
            echo "b";
            # code...
        } elseif ($i==3) {
            echo "c";
            # code...
        } elseif ($i==4) {
            echo "d";
            # code...
        } elseif($i==5) {
            echo "e" ;
        }
    }
}

//EXAMPLE-4 (PROGRAME TO PRINT HALF PYRAMID A USING NUMBER)

for($i = 1; $i <= 5; $i++){
    echo "<br>";
    for($j = 1; $j <= $i; $j++) {
    //   echo $j . ' ' ;
        if ($i == 1 ) {
            echo 1 ;
        } elseif ($i==2) {
            echo 2;
            # code...
        } elseif ($i==3) {
            echo 3;
            # code...
        } elseif ($i==4) {
            echo 4;
            # code...
        } elseif($i==5) {
            echo 5 ;
        }
    }
}

//example-5(inverted half pyramid using *)

for($i=5; $i>=1; $i--) {
    echo "<br>" ;
    for($j=1; $j<=$i; $j++) {
        echo '*' . '';
    }
}

//example-6(inverted half pyramid using number)

for($i=5; $i>=1; $i--) {
    echo "<br>" ;
    for($j=1; $j<=$i; $j++) {
        echo $j . ' ';
    }
}

//example-7

for($i=5; $i>=1; $i--) {
    echo "<br>" ;
    for($j=1; $j<=$i; $j++) {
        echo $i . ' ';
    }
}

//example-8(Floyd's Triangle)
$row=4;
$num=1;
for($i=1; $i<=$row; $i++) {
    echo "<br>";
    for($j=1; $j<=$i; $j++) {
        echo $num . ' ';
        $num++ ;
    }
}

//ex-9(pyramid pattern)
$n=10;
for($i=1; $i<=$n;$i++) {
    for($j=1; $j<=(2*10)-1; $j++) {
    if($j>=$n-($i-1) && $j<=$n+($i-1)) {
        echo "*" . ' ';
    }else {
        echo "&nbsp;&nbsp;";
    }
    }    echo "<br>" ; 
}

//ex-10(traingle pattern using name)
$name= "NIRAJ";
$count= strlen($name) ;
for($i=0; $i<$count;$i++) {
    for($j=0; $j<=$i; $j++){
        echo " $name[$j] ";
        
    } echo "<br>" ;
}

//ex-11 (inverted traingle pattern using name)

$name= "NIRAJ";
$count= strlen($name) ;
for($i=$count; $i>=0;$i--) {
    for($j=0; $j<$i; $j++){
        echo " $name[$j] ";
        
    } echo "<br>" ;
}


//ex-11
$z=5;
for($i=1;$i<=5;$i++) {
    for($j=1;$j<=5;$j++) {
        if($i==$j) {
            echo "*" . ' ';
        }else{
            echo "&nbsp; &nbsp; &nbsp;";
        }
    } echo "<br>";
}

//ex-12
$z=5;
for($i=1;$i<=5;$i++) {
    for($j=1;$j<=5;$j++) {
        if($i==$j) {
            echo "*" . ' ';
        }else{
            echo ' 0 ';
        }
    } echo "<br>";
}

// ex-13
$z=5;
for($i=1;$i<=5;$i++) {
    for($j=1;$j<=5;$j++) {
        if($i==$j || $i+$j==$z+1) {
            echo "*" . ' ';
        }else{
            echo ' 0 ';
        }
    } echo "<br>";
}

//ex-14(cross pattern using star)
$z=5;
for($i=1;$i<=5;$i++) {
    for($j=1;$j<=5;$j++) {
        if($i==$j || $i+$j==$z+1) {
            echo "*" . ' ';
        }else{
            echo "&nbsp; &nbsp; &nbsp;";
        }
    } echo "<br>";
}

//ex-15 (daimond pattern)
$n=10;
for($i=1; $i<=$n;$i++) {
    for($j=1; $j<=(2*10)-1; $j++) {
    if($j>=$n-($i-1) && $j<=$n+($i-1)) {
        echo "*" . ' ';
    }else {
        echo "&nbsp;&nbsp;";
    }
    }    echo "<br>" ; 
}

for($i=$n-1; $i>=1;$i--) {
    for($j=1; $j<=(2*10)-1; $j++) {
    if($j>=$n-($i-1) && $j<=$n+($i-1)) {
        echo "*" . ' ';
    }else {
        echo "&nbsp;&nbsp;";
    }
    }    echo "<br>" ; 
}*/
?>
