<!DOCTYPE html>
<html>
<body>

<?php
    function test1(){
        static $x=10;
        echo $x;
        $x++;
    }

    test1();
    echo "<br>";
    test1();
    echo "<br>";
    test1();
    echo "<br>";
    test1();
    echo "<br>";
?>
</body>
</html>
