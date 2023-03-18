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
class student {

  public $name;
  public $rollNo;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_rollNo($rollNo) {
    $this->rollNo = $rollNo;
  }
  function get_rollNo() {
    return $this->rollNo;
  }
}

$st = new student();
$st->set_name('Alex');
$st->set_rollNo('123');
echo "Name: " . $st->get_name();
echo "<br>";
echo "st: " . $st->get_rollNo();
?>
</body>
</html>