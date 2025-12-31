<?php

include './config/databaseConnection.php';
?>


<?php

//simple method
    // $sqlQuery = 'DELETE FROM users WHERE user_id = 4';
    // $result = $conn->query($sqlQuery);
    


// dealing with query injection
$user_id = 4;
$sqlQuery = 'DELETE FROM users WHERE user_id = ?';
$result = $conn->prepare($sqlQuery);
$result->bind_param('i', $user_id);
$result->execute();

if ($result) {
    echo 'delete successfully';
} else {
    echo 'error to delete record';
}

?>