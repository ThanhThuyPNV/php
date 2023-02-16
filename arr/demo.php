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
    $ages = array ("Petter"=>"22", "Clack"=>"32", "Jonh"=>"28");

    $ages ["Petter"] = "22";
    $ages ["Clack"] = "32";
    $ages ["Jonh"] = "28";
    
    foreach($ages as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
      }
    ?>
</body>
</html>