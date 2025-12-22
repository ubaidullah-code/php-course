<html>
    <head>
        <title>page no 2</title>
    </head>
    <body>
        <h1>Page no 2</h1>
        <?php
        session_start();
        $uname = $_SESSION['username'];
        $upass = $_SESSION['password'];
        echo "$uname<br>$upass";
        ?>
    </body>
</html>