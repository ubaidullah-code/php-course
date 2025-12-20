<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo "<h1>Array in php</h1>";
   //simple Array
   $ar = array("karachi", "islamabad", "peshawar","kpk");
   print_r($ar);
   for ($i=0; $i<count($ar);$i++) { 
    echo "<br>".$ar[$i];
   }

   // assioative array 
   $newarr = ["a"=> "karachi", "b"=> "islamabad", "c"=> "peshawar", "d"=>"kpk"];
   echo "<br>";
   print_r($newarr);
   echo "<br>";
   // array functions 
   //array_intersect
   $array1 = array("mon", "tues", "wed", "thurs", "fri", "sat" ,"sun");
   $array2 = array("mon", "tues", "fri", "sat" ,"sun");
   $array3 = array("mon",  "wed","wed", "fri","sun");
   $newarray = array_intersect($array1, $array2);
   print_r($newarray);
   echo "<br>";
   // array_diff 
   $newarray2 = array_diff($array2,$array3);
   print_r($newarray2);
   echo "<br>";
   //array_unique
   $newarray3 = array_unique($array3);
   print_r($newarray3);
   echo "<br>";
   /// map 

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