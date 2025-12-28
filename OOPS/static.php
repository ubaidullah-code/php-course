<?php
    echo "<center><h1>Static</h1></center>";

?>

<?php 
// define classs
class A {
    // define static properties
    public static $name = "ubaidullah";
    public static $n ;
    // define static function
    public static function staticFunc(){
        echo "hello static function";
    } 
      public static function statticNum($num){
        // if you used static function/properties in class then pass the values in parameter function then using "self" method 
        // Note: self method only worked on static function/ properties
        //Note: this keyword doesn't worked in static function/properties
        //Note: if you used static function/properties don't create the object creation they directly called
       return self::$n = $num;
    }
}
// used double colon :: for access the static func/ properties
 echo A::$name."<br>";
  A::staticFunc();
  echo "<br> ".A::statticNum(30);
?>
<!-- practise -->
<?php 


?>