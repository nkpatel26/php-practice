<html>
   
   <head>
      <title>Hello My site</title>
   </head>
   
   <body>
   <?php
        $str = "Hello World";
        $a = 50000;
        // echo $str . " " . $a;
        $total_marks = array(50, 50, 100, 100);
        // echo $total_marks[3];
        // die;
        $marks = array(25, 30, 70, 80);

        $marks = array(
            array(25,30,40,45),  
            array(30,35,41,40), 
            array(50,55,70,90),  
            array(25,30,40,45) 
        );
        // echo $marks[0][2];
        // die;

        //print_r($marks);


        $marks_2d = array(
            'english' => array(25,30,40,45),
            'chem'=> array(30,35,41,40),
            'phy' =>  array(50,55,70,90),
            'math' => array(25,30,40,45)
        );

        // echo $marks_2d['english'][2];
        // die;


        // print_r($marks_2d);


        $marks_3d = array(
            '11th' =>array(
                'english' => array(25,30,40,45),
                'chem'=> array(30,35,41,40),
                'phy' =>  array(50,55,70,90),
                'math' => array(25,30,40,45),
            ),
            '12th' => array(
                'english' => array(25,30,40,45),
                'chem'=> array(30,35,41,40),
                'phy' =>  array(50,55,70,90),
                'math' => array(25,30,40,45),
            )
        );
echo $marks_3d['12th']['chem'][2];

        // print_r($marks_3d);
    ?>
   </body>

</html>