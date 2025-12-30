<?php


include "./config/databaseConnection.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //     $employee_id = 23;
    //     $employee_name = "ubaidullah";
    //     $employee_salary = 50000;
    //     $department = "IT";
    //     $sqlQuery = "insert into employee values(?,?,?,?)";
    //     $ps = $conn->prepare($sqlQuery);
    //     $ps->bind_param('isis', $employee_id,$employee_name,$employee_salary,$department);
    //     $ps->execute();
    //     echo "Record inserted in the table";

    ?>

    <?php


    //with direct store;

    // $sqlQuery = "insert into users (userName , password ) values ('qadir', 'pass123')";

    //     $result = $conn->query($sqlQuery);
    //     if ($result) {
    //         echo "<br>result in recorded";
    //     }
    //     else{
    //         echo "result is not recorded";
    //     }


    // with variable store / secure method 

    // $name = 'ubaidullah';
    // $pass = 'variablepass';
    // $sqlQuery = "insert into users (userName , password ) values (? , ?)";

    //     $result = $conn->prepare($sqlQuery);
    //     $result->bind_param('ss', $name, $pass);
    //     $result->execute();
    //     if ($result) {
    //         echo "<br>variable with query is added record";
    //     }
    //     else{
    //         echo "<br> variable with query is not added record $conn->error";
    //     }

    ?>
    <!-- practise -->

    <?php
    $name = "Haris";
    $pass = "haris123";
    // direct set values
    // $sqlQuery = "INSERT INTO users (userName , password ) VALUES ('Abdullah', 'abdul1234')";

    // with variables
    // $sqlQuery  = "INSERT INTO users (userName , password) VALUES ('$name' , '$pass')";
    // $result = $conn->query($sqlQuery);

    //with secure methods
    $sqlQuery = 'INSERT INTO users (userName , password) VALUES (?,?)';
    $result = $conn->prepare($sqlQuery);
    $result->bind_param('ss', $name, $pass);
    $result->execute();

    if ($result) {
        echo "<br>users  add successfully<br>";
    } else {
        echo "user is unsuccessfully added: $conn->error";
    }

    ?>
</body>

</html>