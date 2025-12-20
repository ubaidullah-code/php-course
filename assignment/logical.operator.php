<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Logical operators</h1>

    <?php
    $a = 10;
    $b = 0;
    if(++$a > 50 and ++$b > 5)
        echo "Hello Friend<br>";
    else
        echo "Bye frienf<Br>";
    echo "$a<br>";
    echo "$b <br>";

    ?>
</body>
</html>