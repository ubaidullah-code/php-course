<html>
    <head>
        <title>anotherpage</title>
    </head>
    <body>
        <h1>Another page of session</h1>
        <?php
        session_start();
        $uname = $_SESSION["username"] ?? "guest";
        $pass = $_SESSION['password'] ?? "not founded";
        echo "$uname <br> $pass hello world";
        ?>
    </body>
</html>