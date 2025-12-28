<?php

echo "<center><h1>traits</h1></center>";
?>
 <!--polymorphison definition -->
<!-- Same operation may be behave differently in different classes -->

<?php 
// use trait if you don't shared inheritance data with very childs
    trait A{
        function fun1(){
            echo "fun1<br>";
        }
    }
    class B {
        // using trait A class using "use" keyword
        use A;
        function fun2(){
            echo "fun2<br>";
        }
    }
    class C extends B{
        function fun3(){
            echo "fun3<br>";
        }
    }
    $obj = new C();

    $obj->fun1();
    $obj->fun2();

?>

<?php  

trait message1{
    public function msge(){
        echo "OOPS it's fun!";
    }
}
    trait message2{
        public function msge(){
            echo "OOPS reduces the code duplication!";
        } 
    }
    class welcome1{
        use message1;
    }
    class welcome2{
        // if you used same function name in both traits and if you run both function then used this method for teqal the situation
        use message1, message2{
            message1::msge insteadof message2;
            message2::msge as msge2;
        }

    }
    $wel1 = new welcome1();
    $wel1->msge();
    echo "<br>";
    $wel2 =new welcome2();
    $wel2->msge();
    $wel2->msge2();



?>
 