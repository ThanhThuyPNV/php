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
    $json = '{"a":1, "b":2, "c":3, "d":4, "e":5}';
    var_dump(json_decode($json, false));
    var_dump(json_encode($json, true));
    ?>
</body>
</html>