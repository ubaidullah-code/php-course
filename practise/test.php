<html>
    <head>
        <title>First code in php</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family:sans-serif;
                text-align:center;
            }
        </style>
    </head>
    <body>
      <h1 style="text-align:center; background: red;"><u>first code in Php</u></h1>  
    </body>
</html>


<?php
    $a = 100;
    $b = 50;
    $c = true;
echo "welcome to php course<br/>";
echo "check with html tag";
echo '<br>value a is '.$a.' and value b is '.$b.' value c is '.$c;
            //Datatype
            $a = "hello world"; // string
            echo  "<br>"."$a <br>";
            $b = 45; // number/interger
            echo $b."<br>";
            $c = 23.45; //float
            echo $c."<br>";
            $d = TRUE; // booleam
            echo $d.'<br>';
            $f = array("qadir", "abdullah", "tabish"); //array
            print_r($f);
            $g = null; //null
            echo $g;

            //if else
            if($b > $c)
                echo "<br>b is greater then c ";
            else
                echo "<br>c is greater then b";

            //define constant

            define('PI',3.14);
            $b = 12.45;
            $r = PI*$b**2;
            echo "<br>".$r;
            //operators
            $a =50;
            $ubaid = "ubaid ullah";
            echo "<br> ".($a>=$ubaid)."<br>";
            var_dump($ubaid);
            //spaceship operator

            $num1 = 30;
            $num2 = 40;
            echo "<br>".($num1 <=> $num2)."<br>";
            $num3 = 2;
            $num4 = $num3++ + ++$num3 + $num3++ ;
            //2 + 4 + 4
            echo "<br> num3: ".$num3;
            echo "<br> num4: ".$num4;

            //logical operators
            // && is same and
            // || is same as or
            // !

            $oper1 = 10;
            $oper2 = 20;
            if($oper1 and $oper2) // same as if($oper1 && $oper2)
                echo "<br>hello friend";
            else
                echo "<br>bye friend";
            // or operator
             $oper3 = 0;
            $oper4 = 0;
            if($oper3 or $oper4) // same as if($oper3 || $oper4)
                echo "<br>hello friend with or operator";
            else
                echo "<br>bye friend with or operator";
            // not operator
            $oper5 = 10;
            if(!$oper5)
                echo "<br> hello friend with not operator";
            else
                echo "<br> bye friend with not operator";

            // string ooperator

            $str1 = 10;
            $str2 = 100;
            $str2.=$str1;
            echo "<br>$str2";
            //conditionaly operator same as ternary operator
            $str=500? "true": "false";
            echo "<br>$str";
          

            
?>