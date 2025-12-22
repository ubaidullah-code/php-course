<?php
session_start();
?>
<html>
    <head>
        <title>
            login page
        </title>
        <style>
            form{
                font-family: sans-serif;
                display:flex;
                width: 50%;
                flex-direction : column;
                gap:20px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform:translate(-50%, -50%);
            }
            label{
                display: flex;
                flex-direction: column;
                
            }
            label > input, button{
                padding:8px 10px;
                  font-size: 18px; 
                  border-radius: 8px;
                  border:none;
            }
            input{
                background: #EBF4DD;
            }
            button{
                background: #4B9DA9;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>login page</h1>
        </center>
            <form method="post">
                <label>
                    User Name:
                    <input type="text" name="textname">
                </label>
                <label>
                    Password:
                    <input type="text" name="textpass">
                </label>
                <button type="submit" name="handleSubmit">Submit</button>
            </form>
            <?php
            if(isset($_POST["handleSubmit"])){
                $uname = $_POST['textname'];
                $upass = $_POST['textpass'];

                $_SESSION['username'] = $uname;
                $_SESSION['password'] = $upass;
                header('location: page1.php');
                exit();

            }
            ?>
    </body>
</html>