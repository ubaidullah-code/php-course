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
        <title>set data in sql with form</title>
    </head>
    <body>
        <form action="userForm.php" method="post">
            <label>
                userName:
                <input type="text" name="username">
            </label>
            <label>
                Password:
                <input type="password" name="userpass" id="">
            </label>
            <p><?= $error ? $error : ($success ? $success : "")?> </p>
            <button type="submit" name="handleSubmit">Submit</button>
        </form>
      
    </body>
</html>