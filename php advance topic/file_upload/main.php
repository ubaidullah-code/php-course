<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=post  enctype=multipart/form-data>
        <input type="file" name="fileupload" id="">
        <button type=submit>Submit</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=== "POST"){
        $file = $_FILES['fileupload'];
        if($file){
            header("location: fileUpload.php");
            exit;
        }
    }
    ?>
</body>
</html>