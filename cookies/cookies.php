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
    setcookie("user_name", "thuy", time()+10 ,'/');
    echo 'đợi 10s'."<br>";
 
    echo $_COOKIE['user_name'];
    ?>
</body>
</html>