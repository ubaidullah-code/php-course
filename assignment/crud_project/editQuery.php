<?php
    include './config/databaseConnection.php';
    $userName = $_POST['username'];
    $userPass = $_POST['userpass'];
    $editId = $_COOKIE['editId'];
    echo "$editId $userName $userPass";
   
    $sqlQuery = "UPDATE users set userName= ? , password = ? WHERE user_id = ?";
    $result = $conn->prepare($sqlQuery);
    $result->bind_param("ssi", $userName, $userPass ,$editId);
    $result->execute();
    if ($result > 0) {
        header('location: users.php');
        exit();
    }
    else{
        echo "error";
    }

?>