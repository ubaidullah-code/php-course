<?php
    echo "<center><h1>Interface</h1></center>"

?>

<?php 
// define interface class 
interface Animal{
    // define abstruct function
     function makeSound($str);
}
// if you inherit  interface class object using implements method
class cat implements Animal
{
    // if you using parameter function then your blue print class(parent class or interface class)must used parameter in blue print function
    function makeSound($str)
    {
        echo "cats are making sound like meow meow $str<br>";
    }
}
interface HowManyLags{
    function legs();
}
//Note: if you used multiple interface class useds seperate abstruct function 

// if you used multiple inherit class must us "," or implements method
class dog implements Animal,HowManyLags{

    // first's interface function  
    function makeSound($str)
    {
        echo "dogs are making sound like wooh wooh $str<br>";
    }
    // second's interface function
       function legs()
    {
        echo "dogs are making sound like wooh wooh <br>";
    }
}
$obj = new cat();
$obj->makeSound("maano billi");
    $obj1 = new dog();
$obj1->makeSound("dogesh bhai");



?>