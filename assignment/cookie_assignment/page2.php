<html>
    <head><title>page no 2</title></head>
    <body>
        <h1>page no 2</h1>
         <?php
        $uname = $_COOKIE['username'] ?? "Guest";
        $upass = $_COOKIE['password'] ?? "Password not founded";
        echo "$uname <br> $upass";

        ?>
    </body>
</html>