<!DOCTYPE html>
<html>
<body>

<?php
    //GLOBAL SCOPE VARIABLE

    $x=5; //global scope

    function test1(){
    //will generate error

        echo "<p>Value of x is: $x</p>";
    }
    test1();

    echo "<p>Value of x is: $x</p><hr />";

    //LOCAL SCOPE EXAMPLE
    
    function test2(){
        $y=5; //local scope
        echo "<p>Value of y is: $y</p>";
    }
    test2();

    //will generate error
    echo "<p>Value of y is: $y</p>";

?>
</body>
</html>
