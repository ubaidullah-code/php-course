<?php
    echo "<center><h1 style=margin:20px>Learing with OPPS</h1></center>";
?>
 <!-- basic structure of class -->
<!-- <?php 
   
   //define class 
   class Student
   {
    // define properties
    public $name = "abdullah";
    public $username;
    // define  member function / method
    function create(){
         return "hello $this->name you are feeling well!";
        }
        // function that's works on setting the propeties
        function set_name($setName){

            // using "this" for accessing the class of the onject 

            $this->username = $setName;

            // using return if you call the function also gave you the results in single line
             
            // return $this->username;
        }
   }
   //  object creation
//    $obj = new Student();

//    // calling the static name variable/properties
//    echo $obj->name."<br>";

//    // calling the function 
//    echo $obj->create();

//    // set the value using arguments in the properties/variable
//     $obj->set_name("Qadir");

//     // calling the properties to set in upper line
//    echo '<br>'.$obj->username;


?> -->

<!-- contructor or destructor -->
<!-- <?php 
   
   class Student1
   {
    public $textname;

    // constructor imdetily call when object is creation
     function __construct($firstname ,$lastname)
    {
      $this->textname = "$firstname $lastname"; 
    
    }
    // destructor call last when all calling function are bing called
    function __destruct()
    {
         echo  "<br> $this->textname";
    }
   }
//    $ob1 = new Student1("Ubaidullah", "siddique" );
?> -->

<!-- private , protected or public -->
 <?php 
    // class publicAccess
    // {
    //     public $name;
    //     function publicCheck($str)
    //     {
    //         $this->name = $str;
    //     }
    // }
    // $obj = new publicAccess();
    // $obj->publicCheck("ubaidullah");
    // echo "$obj->name<br>";
 ?>
  <?php 
    // class protectedAccess
    // {
    //     protected $protectedname;
    //     function protectedCheck($str)
    //     {
    //         $this->protectedname = $str;
    //     }
    //     function getting_values()
    //     {
    //         return $this->protectedname; 
    //     }
    // }
    // $obj = new protectedAccess();
    // $obj->protectedCheck("ubaidullah by protected properties");
    // echo $obj->getting_values();
    // // does not called like this
    // // echo "$obj->protectedname<br>";
 ?>
   <?php 
    // class privateAccess
    // {
    //     private $privatename;
    //     function privateCheck($str)
    //     {
    //         $this->privatename = $str;
    //     }
    //     function getting_values()
    //     {
    //         return $this->privatename; 
    //     }
    // }
    // $obj = new privateAccess();
    // $obj->privateCheck("ubaidullah by private properties");
    // echo $obj->getting_values();
    // // does not called like this
    // // echo "$obj->privatename<br>";
 ?>