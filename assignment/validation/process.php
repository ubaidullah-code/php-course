<?php
    $data = [];
    $errors = [];
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $data['firstname'] = trim($_POST['firstname'] ?? "");

        $data['lastname'] = trim($_POST['lastname'] ?? "");

        if($data['firstname'] === ''){
            $errors['firstname'] = "fill the firstname";
        }
          if($data['lastname'] === ''){
            $errors['lastname'] = "fill the lastname";
        }
           if(empty($errors)){
            
            header('location: success.php');
            exit();
           }

    }

?>