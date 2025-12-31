<?php
    include './config/databaseConnection.php';
?>

<?php 
    //multi values pass in this
    // $sqlQuery= "UPDATE  users SET userName = 'umar' WHERE user_id IN (3 , 6, 7)";
    // single value pass in this
    $sqlQuery= "UPDATE  users SET userName = 'update', password ='123' WHERE user_id IN (5 , 6) ";

    $result = $conn->query($sqlQuery);
    if ($result) {
        echo 'update successfully';
    }
    else{
        echo 'update unsuccessfully';
    }
?>