<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String Method in php</h1>
    <?php
    // str function 
    // strlen


    $mystr = "data flair free cousre of php certificate";
    echo "$mystr<br>";
    $strle = strlen($mystr);
    echo " length of string is: $strle<br>";


    //str_word_count
    $strWord = str_word_count($mystr);
    echo "length of words in this statement: $strWord<br>";

    //chunk_split function for string
    $chunkStr = chunk_split($mystr,4,"php");
    echo "chunk split function: $chunkStr<br>";

    //str-split
    $newStrArry = str_split($mystr, 4);
    print_r($newStrArry);
    echo"<br>";
    // strtoupper
    $upper = strtoupper($mystr);
    echo "$upper<br>";
    //strtolower
    $lower = strtolower($mystr);
    echo "$lower<br>";
    //substr_count
    $myNewStr = "Hello world hello hello";
    $n = substr_count($myNewStr,"hello",1);
    echo $n."<br>";
    //ucwords string
    $capitilaizeTheWords = ucwords($myNewStr);
    echo "$capitilaizeTheWords<br>";
    //ucfirst string method
    $capitilaizeTheFirstWords = ucfirst($myNewStr);
    echo "$capitilaizeTheFirstWords<br>";
    //lcfirst string method
    $lowerFirstWord = lcfirst($myNewStr);
    echo "$lowerFirstWord<br>";
    //strcmp function to compare the two string values return 0 or 1 according to the values
    $str1 = "karachi";
    $str2 = "Karachi";
    if(strcasecmp($str1,$str2)== 0)
        echo "same<br>";
    else 
        echo "not same <br>";
    ?>
</body>
</html>