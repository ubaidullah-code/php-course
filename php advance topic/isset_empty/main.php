<?php

echo "<center><h1>isset_ empty</h1></center>"

?>

<?php 
// isset is set if the $name is declared or empty string
    $name = "ubaidullah";
    if (isset($name)) {
     echo "isset is set for working<br>";
    } 
     else{
        echo "isset is not set for working<br>";
    }
    //empty is set if the variable is not declared or null
    $declered = "ubaidullah";
    if (empty($declered)) {
          echo "empty is set for working<br>";
    }
    else{

          echo "empty  is NOT set for working<br>";
    }

?>