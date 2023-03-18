<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Student {
        public $name;
        public $age;
        public $class;

        function __construct($name, $age, $class){
            $this->name = $name;
            $this->age = $age;
            $this->class = $class;
        }

        function get_name(){
            return $this->name;
        }

        function get_age(){
            return $this->age;
        }

        function get_class(){
            return $this->class;
        }
    }
    $student = new Student ("Le Thi Thuy Linh", "21", "24A");

    echo "Name: " .$student->get_name();
    echo "<br>";
    echo "Age: " .$student->get_age();
    echo "<br>";
    echo "Class: " .$student->get_class();
    ?>
</body>
</html>