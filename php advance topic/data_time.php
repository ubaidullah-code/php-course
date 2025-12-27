<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data and time</h1>
    <p>&copy-<?php echo date("Y")?></p>
    <h2>date</h2>
<?php
    echo "today date is  ".date("Y/m/d") ."<br>";
    echo "today date is  ".date("y-d-m")."<br>";
    echo "today date is  ".date("d,m,Y")."<br>";
    echo "today date is  ".date("d,m,Y")."<br>";
    echo "today date is  ".date("F")."<br>";
    echo "today date is  ".date("l")."<br>";
    ?>
    <h2>time</h2>
    <?php
    date_default_timezone_set("Asia/Karachi");
    echo "your timing is" .date('H-i-s,A')."<br>";
    echo "your timing is" .date('h,i,s,a');
    ?>
</body>
</html>