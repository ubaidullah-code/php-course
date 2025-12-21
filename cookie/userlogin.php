<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../loginwithphpcode/style.css">
</head>
<body>
    <h1 style="text-align:center">login with cookie</h1>
       <!-- <form action="anotherpage.php" method="post"> -->
        <form method="post">
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
   if (isset($_POST["handleSubmit"])) {
    $userName = $_POST["textusername"];
    $userPassword = $_POST["textpassword"];
    echo "$userName $userPassword";
    setcookie("username", $userName,);
    setcookie("password", $userPassword,);
    
    header("Location: anotherpage.php");
 
}
    ?>
</body>
</html>