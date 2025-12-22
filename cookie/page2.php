<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>page no 2</h1>

    </center>
    <?php
    $userName = $_COOKIE['username'] ?? "guest<br>";
    $password = $_COOKIE['password'] ?? "password not founded" ;
    echo "$userName $password";
    ?>
</body>
</html>