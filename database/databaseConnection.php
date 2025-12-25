
  
    <?php
    $host = "localhost";
    $username= "root";
    $port= 3307;
    $db_name= "learning_database";
    $password= "";

    $conn = mysqli_connect($host,$username,$password, $db_name, $port);
 if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
    ?>
    
