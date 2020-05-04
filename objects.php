<!DOCTYPE html>
<html>
<body>

<?php
    //create the class
    class Person{
        //create properties
        public $firstname;
        public $lastname;
        public $age;

        //assigning values to the property variables
        public function _construct ($firstname, $lastname, $age) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->age = $age;

        }
        //create a method (function tied to an object)
        public function hello() {
            return "I am" . $this->firstname . " " . $this->lastname ." , my age is " . $this->age ."";

        } 
    }

    //creating a new person name Achala who is 26 years old

    $person1 = new Person('Achala','Bandara', 26);
    $person2 = new Person("Joe","Bob", 24);

    //print out what the hello method return

    echo $person1->hello();
    echo "<br>";
    echo $person2->hello();

?>
</body>
</html>
