<?php
include './config/databaseConnection.php';
?>

<?php 

    $sqlQuery = 'SELECT * FROM users';
    $result = $conn->query($sqlQuery);

    if($result->num_rows > 0){
        while ($user = $result->fetch_assoc()) {
            echo "<pre>";
            print_r($user['userName']);
            // print_r($user);
        }
    }
  


    // echo "<pre>";
    // print_r($result);
    // exit;

?>