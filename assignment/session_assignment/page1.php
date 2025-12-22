<html>
    <head>
        <title>
            page no 1
        </title>
    </head>
    <body>
        <center><h1>Page no 1</h1></center>

        <?php
        session_start();
        $uname = $_SESSION['username'];
        $upass = $_SESSION['password'];
        echo "$uname <br> $upass";

        ?>
        <form action="page2.php">
            <button type='submit'>
                next page
            </button>
        </form>
    </body>
</html>