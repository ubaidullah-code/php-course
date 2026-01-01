<?php
include './config/databaseConnection.php';
?>

<?php

if(isset($_POST['handleDelete'])){
  $delete_id = $_POST['delete_user'];
  $deleteQuery = 'DELETE FROM users WHERE user_id = ?';
  $deleteQresult = $conn->prepare($deleteQuery);
  $deleteQresult->bind_param('i',$delete_id);
  $deleteQresult->execute();
  header('location: users.php');
  exit();
}
?>