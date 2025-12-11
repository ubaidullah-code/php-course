<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>increment / decrement operator assignment</h1>

    <?php
    $a = 5;
    $b = ++$a;
    echo "<br> value of b: " .$b;
    $c = $b--;
    echo "<br> value of c: " .$c;
    $a = ++$b;
    echo "<br> value of a: " .$a;
    $d = $a + ++$a + $a++;
    echo "<br> value of d: " .$d;


    // echo "<br> b : 6, c : 6 , a: 6 , d: 20 "
    ?>
</body>
</html>