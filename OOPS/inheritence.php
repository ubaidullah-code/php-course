<?php
 echo "<center><h1>Inheritance</h1></center>"

?>


<?php
//define class
// parent class
// class Student
// {
//     // define properties
//     public $name;
//     // parent contructor
//     function __construct($str)
//     {
//       $this->name = $str;
//        echo $this->name;   
//     }
// }
// // child class
// class ClassX extends Student
// {
//     //child constructor
//     public function __construct($str)
//     {
//         echo "constructor of classX<br>";
//         //if you call both constructor(parent or child) used parent keyword
//         parent::__construct($str);
//     }
// }
// // object creation
// $obj = new ClassX("ubaidullah");

?>

<!-- practise of inheritance -->

<?php 
 
    class ClassX {
        protected $name;

        function getNameCLassX($str){
            return $this->name = $str;
        }
    }
    class ClassIX extends ClassX {
        function getNameCLassIX($str){
            return $this->name =$str;
        }
    }
    $obj1 = new ClassIX();
    echo "class IX student name is: ".$obj1->getNameCLassIX("qadir");
    $obj2 = new classX();
    echo "<br>class X student name is: ".$obj2->getNameCLassX("abdullah");


?>