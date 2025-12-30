<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="checkbox" name="food[]" value="biryani" id="">biryani
    <input type="checkbox" name="food[]" value="palao" id="">palao
    <input type="checkbox" name="food[]" value="qorma" id="">qorma
    <input type="checkbox" name="food[]" value="beef burger" id="">beef burger
    <button type="submit">submit</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"]==="POST") {
         $food = $_POST["food"];
        // echo "<pre>". print_r($_POST);
        // print_r($food);
        foreach ($food as $foodName) {

            echo "$foodName <br>";
        }
    }
    ?>
</body>
</html>