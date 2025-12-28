<?php
    echo "<center><h1>Abstract</h1></center>"

?>

<?php 
    abstract class Car
    {
        public $CarName;
      public function __construct($name)
       {
       return $this->CarName = $name;
       }
       abstract function intro();
    }
    class Audi extends Car
    {
        function intro(){
            return "choose German cars if you like built quality $this->CarName<br>";
        }
    }
    class BMW extends Car{
        function intro(){
            return "Choose BMW car's if you feel the ultimate driving expreience $this->CarName<br>";
        }
    }
    $bmw = new BMW("BMW M3 compitition");
    echo $bmw->intro();
    $audi = new Audi("Audi A6 RS");
    echo $audi->intro();
?>