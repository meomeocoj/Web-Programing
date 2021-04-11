<?php
    class BaseClass {
        protected $name = "BaseClass";

        function __construct() {
            print ("In " . $this->name . " constructor<br>");
        }

        function __destruct()
        {
            print("Destroying " . $this->name . "<br>");
        }
    }

    class SubClass extends BaseClass {
        function __construct()
        {
            $this->name = "Subclass";
            parent::__construct();
        }
        function __destruct()
        {
            parent::__destruct(); // TODO: Change the autogenerated stub
        }
    }

$obj1 = new SubClass();
// In Subclass constructor
// Destroying Subclass
$obj2 = new BaseClass();
// In BaseClass constructor
// Destroying BaseClass
?>

