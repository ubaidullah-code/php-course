<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function multi($n)
   {
    if(($n % 2)== 0)
        echo "even<br>";
    else 
        echo "odd<br>";
   }
   $mathArr = array(2,3,5,6,7,3,1,3,46,7);
   $borhter = array_map("multi",$mathArr);
   print_r($borhter);
    ?>
</body>
</html>