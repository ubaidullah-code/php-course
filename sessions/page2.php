<html>
    <head>
        <title>page 2 of sessions</title>
    </head>
    <body>
        <h2>session page 2</h2>
        <?php
        $uname = $_POST["textusername"];
        $upass =$_POST['textpassword'];
        echo "$uname<br>$upass";
        session_start();
        $_SESSION['username'] = $uname;
        $_SESSION['password'] = $upass;
        // session_unset();
        // session_destroy();
        ?>
        <form action="anotherpage.php">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>