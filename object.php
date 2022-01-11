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
    class class1 {
        public $x=1 ;
        function fun1() {
            return $this -> x++ ;        }
    }
    $obj1=new class1() ;
    $obj2=new class1() ;
$obj1 ->fun1();
echo $obj1->x ;
echo "<br/>" ;
echo $obj2->x;
//EXAMPLE 2
class class1 {
    function __construct() {
        echo "start" ;
    }
function __destruct() {
    echo "end";
}
}
$obj1=new class1();

//EX-2
class class1 {
    function fun1() {
        echo "fun1" ;
        echo"<br>" ;
    }
    function fun2() {
        echo "fun2" ;
    }
} $obj=new class1() ;
$obj->fun1() ;
$obj->fun2() ;


//EX-3
class class2 {
   public $r=7;
   public $b=5;
    function fun1() {
        echo $this->r ;
        echo "<br>" ;
    } function fun2() {
        echo $this->b ;
    }
}$obj=new class2();
$obj->fun1();
$obj->fun2();

//EX-4
class class3 {
    public $e=9 ;
    public $f=11 ;
    function fun1() {
        echo ++$this->e ;
        echo "<br>" ;
    }function fun2() {
        echo $this->f ;
    }
} $obj= new class3();
$obj->fun1() ;
$obj->fun2() ;

//EX-4
class class3 {
    public $w=12 ;
    function fun1() {
        ++$this->w ;

    }
}$obj1=new class3();
$obj2=new class3();
$obj1->fun1();
echo $obj1->w ;
echo "<br>" ;
echo $obj2->w ;


//example of construct and destruct
//EX-5
class class4 {
    function __construct() {
        echo "ami che tu maa";
    } function __destruct() {
        echo "chin chin chin" ;
    }
} $obj=new class4()


//EX-6
class class5 {
    function __construct(){
        echo "hello" ;
    } function fun1() {
        echo " niraj " ;
    }function __destruct(){
        echo "patel"; 
    }
} $obj=new class5();
$obj->fun1();


//INHERITANCE EXAMPLE
//EX-7
class class1 {
    function __construct() {
        echo "pushpa1" ;
        echo "<br>" ;
    } function fun1() {
        echo "fun1" ;
    }
} class class2 extends class1 {

}
$obj=new class2();
$obj->fun1();

//EX-8
class class2 {
    function __construct() {
        $this->num=22;
        echo "bahubali" ;
        echo "<br>" ;
    } function fun1() {
        echo "ss1" ;
        echo "<br>" ;
    }
} class class3 extends class2 {
    function __construct() {
        echo "RRR";
        echo "<br>";
        parent::__construct();
    }
} $obj= new class3();
// $obj->fun1();
echo $obj->num ;


// ENCAPUPSULATION EXAMPLE

//EXAMPLE-1 (PUBLIC TYPE)

class class1 {
 
    function __construct() {
        $this->x=1 ;
        
    }
} $obj= new class1();
$obj->x=2 ;
echo $obj->x;

//EXAMPLE-2 (PROTECTED TYPE)

class class2 {
    protected $z;
    function __construct() {
        $this->z=8 ;
    } function getz() {
        return $this->z;
    }
} $obj= new class2();
echo $obj->getz();
?>
</body>
</html>