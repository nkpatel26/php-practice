<?php
//interface ex-1 (oops)
// interface class1 {
//     public function test1() ;
// }
// interface class2 {
//     public function test2() ;
// }
// class class3 implements class1,class2{
//     public function test1() {
//         echo "test1";
//     }
//     public function test2() {
//         echo "test2" ;
//     }
// }
// $obj=new class3() ;
// echo $obj->test2() ;


//static variable and static function(oops
class class2 {
    static public $num=11;
    static function fun1() {
        echo "<br>" ;
        echo " static function" ;
        echo "<br>" ;
    }
}
echo class2::$num ;
echo class2::fun1() ;

//ex-2
class class3 {
    static public $x=15 ;
    static function fun2 () {
        echo self::$x;
    }
}
echo class3::fun2() ;

//ex-3
class class4 {
    function __construct() {
        echo "hi" ;
    }
    function fun3() {
        echo "hello" ;
    }
}
echo class4::fun3();

// Traits exampple

trait class5 {
    function fun5() {
        echo "hello1"; 
    }
}
class class6 {
    use class5;
    function fun6() {
        echo "hello2";
    }
}
class class7 extends class6 {
    function fun7() {
        echo "hello3";
    }
}
class class8 extends class7 {
    use class5;
    function fun8() {
        echo "hello4";
    }
}

$obj=new class7();
echo $obj->fun5();

//ex-2
trait t9 {
    function fun9() {
        echo "aeny" ;
    }
}
trait t10 {
    function fun10() {
        echo "princy" ;
    }
}
class class11 {
    use t9,t10;
    function fun10() {
        echo "diyan";
    }
}
$obj=new class11();
$obj->fun10();

//ex-3
trait t11 {
    function fun11() {
        echo "aeny" ;
    }
}
trait t12 {
    function fun11() {
        echo "princy" ;
    }
}
class class15 {
    use t11,t12{
    t11::fun11 insteadOf t12;
    t12::fun11 as fun12 ;
}
    
}
$obj=new class15();
$obj->fun12();




?>