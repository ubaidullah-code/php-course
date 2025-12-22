<html>
    <head>
        <title>page no 1</title>
    </head>
    <body>
        <h1>page no 1</h1>
        <?php
            $uname = $_POST['textname'];
            $upass = $_POST['textpass'];
            setcookie("username",$uname);
            setcookie("password",$upass);
            echo "$uname <br> $upass";
        ?>
        <form action="page2.php" method="post">
            <button type=submit>Next Page</button>
        </form>
    </body>
</html>