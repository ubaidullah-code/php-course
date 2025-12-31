<?php
include './config/databaseConnection.php';
?>
  <?php 
            $error = "";
            $success = "";
        if(isset($_POST['handleSubmit'])){
            $userName = $_POST['username'];
            $pass = $_POST['userpass'];
            if(empty($userName) || empty($pass))
            {
              $error = "Please fill all feild"; 
                
            }
            else{
                $sqlQuery = 'INSERT INTO users (userName , password) VALUES (?,?)';
                $result =$conn->prepare($sqlQuery);
                $result->bind_param('ss', $userName , $pass);
                $result->execute();
                $success ="user added";

            }

        }
        
        ?>

<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <div class="form-container">
    <form action="userForm.php" method="post" class="auth-form">
        <h2>Login</h2>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter username" required>
        </div>

        <div class="form-group">
            <label for="userpass">Password</label>
            <input type="password" name="userpass" id="userpass" placeholder="Enter password" required>
        </div>

        <p class="form-message">
            <?= $error ? $error : ($success ? $success : "") ?>
        </p>

        <button type="submit" name="handleSubmit">Sign In</button>
    </form>
</div>  
    </body>
</html>