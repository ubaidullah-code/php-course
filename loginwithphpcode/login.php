<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <label for="username">
            User Name
            <input type="text" id="username" name="textusername">
        </label>
        <label for="userpassword">
            Password
            <input type="password" name="textpassword" id="userpassword">
        </label>
            <button type="reset" value="reset">Reset</button>
            <button type="submit" value="submit" name="handleSubmit">Submit</button>
    </form>   
    <?php
    if(isset($_POST["handleSubmit"]))
    {
        $userName = $_POST['textusername'];
        $userPassword = $_POST['textpassword'];
     
        if(strcasecmp($userPassword,"Ubaid74@")==0 && strcmp($userName,"ubaidullah")== 0)
            // echo "<font color=green text-align=center font-size=20px>you are valid user</font>";
        header("location:checklogin.php");

        else
            echo "<font color=red text-align=center >you are not valid user</font>";
    }
        ?>
</body>
</html>