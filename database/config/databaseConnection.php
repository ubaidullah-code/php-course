<?php 
// with object method

    $localhost = "localhost";
    $username = "root";
    $password= "";
    $port = 3307;
    $dbname = "learning_database";

    $conn = new mysqli($localhost,
     $username , $password , $dbname , $port );

    if ($conn->connect_error) {
         die("connection is failed: $conn->connect_error");

    }
    // echo "database is connected<br>";
?>

<?php 

    // $localhost = "localhost";
    // $username = "root";
    // $password= "";
    // $port = 3307;
    // $dbname = "learning_database";

    // $conn = @mysqli_connect($localhost,$username ,$password , $dbname ,$port);
    // if ($conn) {
    //     echo 'database is connected with another method';
    // } else {
    //     echo 'database is not connected';
    // }
    

?>

    
