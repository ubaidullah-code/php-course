<html>
    <head>
        <title>check login</title>
    </head>
    <body>

        <h1>welcome to user</h1>
    <?php
    $user = $_COOKIE["username"] ?? "guest<br>";
    $password = $_COOKIE["password"] ?? "password not founded";
     
    echo "$user $password"
    ?>
















        <!-- <?php
        // $userName = $_POST['textusername'];
        // $userPassword = $_POST['textpassword'];
        // echo "$userName $userPassword";
        // if(strcasecmp($userPassword,"Ubaid74@")==0 && strcmp($userName,"ubaidullah")== 0)
        //     echo "<font color=green font-size=20px>you are valid user</font>";
        // else
        //     echo "<font color=red>you are not valid user</font>";
        ?>  -->
    </body>
</html>