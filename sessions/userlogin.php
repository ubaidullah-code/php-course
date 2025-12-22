<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../loginwithphpcode/style.css">
    <title>Session with login</title>
</head>
<body>

<center><h1>Session login</h1></center>

<form  method="post">
    <label for="username">
        User Name
        <input type="text" id="username" name="textusername">
    </label>

    <label for="userpassword">
        Password
        <input type="password" name="textpassword" id="userpassword">
    </label>

    <button type="reset">Reset</button>
    <button type="submit" name="handleSubmit">Submit</button>
</form>

<?php
if (isset($_POST["handleSubmit"])) {

    $userName = $_POST["textusername"];
    $pass= $_POST["textpassword"];
    
    // store only username in session
    $_SESSION['username'] = $userName;
    $_SESSION['password'] = $pass;
    header("location: anotherpage.php");
    exit();
   
}
?>

</body>
</html>
