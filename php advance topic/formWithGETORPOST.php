<?php
// check post values
    // print_r($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="formWithGETORPOST.php" method="post">
        <label>
            Username: 
            <input type="text" name="username">
        </label>
        <br>
        <label>
            Password: 
            <input type="password" name="userpass">
        </label>
        <br>
        <button type="submit">Submit</button>
        <a href="formWithGETORPOST.php">Home</a>
    </form> -->

    <form action="" method="post">
        <input type="radio" name="course" value="computer science">computer science
        <br>
        <input type="radio" name="course" value="AI">AI
        <br>
        <input type="radio" name="course" value="cyber secruity">cyber secruity
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php 
    if($_SERVER["REQUEST_METHOD"]=== "POST")
    {
        $course = $_POST['course'] ?? "";
        // // echo $course;
        // if($course){
        //     echo "your select field is $course";
        // }

        // if(empty($course))
        // {
        //         echo "please select your field";
        //         return;
        // }
        switch ($course) {
            case 'computer Science':
                echo "best of luck your field is computer science";
                break;

                case 'cyber secruity':
                echo "best of luck your field is cyber secruity";
                break;
                  case 'AI':
                echo "best of luck your field is AI";
                break;


            default:
                   echo "please select your field";
                break;
        }
    }
    
    
    ?>

</body>
</html>