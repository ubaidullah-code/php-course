<?php
include './config/databaseConnection.php';
?>

<?php 

    // $sqlQuery = 'SELECT * FROM users ';
    // // $sqlQuery = 'SELECT * FROM users WHERE user_id = 4';
    // $result = $conn->query($sqlQuery);

    // if($result->num_rows > 0){
    //     while ($user = $result->fetch_assoc()) {
    //         echo "<pre>";
    //         // print_r($user['userName']);
    //         print_r($user);
    //     }
    // }
  


    // echo "<pre>";
    // print_r($result);
    // exit;

?>
<!-- practise -->
<?php  

    $sqlQuery = "SELECT user_id , userName ,created_at FROM users WHERE user_id = 3";

    $result =$conn->query($sqlQuery);
    
    if ($result->num_rows) {
        while ($res = $result->fetch_assoc()) {
            echo "<pre>";
            print_r($res);
        }
    }

?>