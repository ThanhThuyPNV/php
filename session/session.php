<?php 

?>
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
    session_start();
    session_register("name"); 
    $_SESSION["name"] = "thuy";

    echo "<a href='session1.php'></a>";

    if(isset($_SESSION))
    ?>
</body>
</html>