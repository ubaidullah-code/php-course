
<?php 

    $host = 'localhost';
    $userName = 'root';
    $password = '';
    $port = 3307;
    $dbname = 'learning_database';

    $conn = new mysqli($host, $userName ,$password ,$dbname ,$port);
    if($conn->connect_error){
        echo 'database is not connected';

    }
 

?>