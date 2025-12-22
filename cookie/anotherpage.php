<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>anotherpage</h1>
     <?php
    $user = $_COOKIE["username"];
    $password = $_COOKIE["password"];
    echo "$user $password";
    ?>
    <form action="page2.php" method="post">
        <button type="submit" value="submit">Submit</button>
    </form>
    
</body>
</html>