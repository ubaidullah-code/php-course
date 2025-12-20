<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function in php</h1>
    <?php
    /// Basic function method
    function display($a  , $b) // definition of function
    {
        echo $a + $b;
    };
     display(5 , 9); // calling of function
    echo "<br> end program<br>";

    /// using of variable argument method for all arguments (var args)
    function sum(...$multilpleValues){
        $additionOfValues= 0;
        foreach ($multilpleValues as $m) {
           $additionOfValues += $m;
        }
        echo "sum of all arguments: $additionOfValues<br>";
    }
    sum(20,40,50);
    sum(20,40,50,6);
    sum(20,40,50,90);
    sum(20,40,50,78,65,23);

    //call by value or copy by value;

    function callByValue($c, $d){
        $c += 100;
        $d += 200;
    }
    $c = 50;
    $d = 100;
    callByValue($c , $d);
    echo "$c , $d<br>";

    // reference by value or copy by reference

      function referenceByValue(&$e, &$f){
        $e += 100;
        $f += 200;
    }
    $e = 50;
    $f = 100;
    referenceByValue($e , $f);
    echo "$e , $f";

    ?>
</body>
</html>