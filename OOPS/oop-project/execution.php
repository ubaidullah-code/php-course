<?php
include_once 'config/queries.php';

?>

<?php

// object creation
$obj = new Queries();

// dummy data
$data = array(
    'userName'=> 'Amir khan',
    'password'=> 'pass1234'
); 
$id = 26;
$tableName = "users";

// $result = $obj->delete_data($tableName,"user_id",$id);


$result =  $obj->get_data($tableName , $id);
$result =$result->fetch_assoc();
echo "<pre>";


// store user data in session
session_start();
$_SESSION['user']= $result;
print_r($_SESSION['user']);

//cookie
setcookie("users",json_encode($result));
$user =  json_decode($_COOKIE['users'], true);
print_r($user);





// calling insert query
// $obj->insert_data($tableName, $data);

// calling get query 
$res = $obj->get_data($tableName , );
if ($res->num_rows > 0) {
    while ($user = $res->fetch_assoc()) {
        echo "<pre>";
        print_r($user);
    }
}

?>