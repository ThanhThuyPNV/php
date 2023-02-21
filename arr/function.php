<!DOCTYPE html>
<html>
<body>

<!-- <?php
$cars=array("Volvo","BMW","Toyota");
sort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
?> -->
<form action="" method = "post">
    Search: <input type="text" name="search">
    <button type="submit" name = "submit" value="search">Search</button><br>
    ket qua: <?php echo $kq ?>
</form>
<?php
$array = array("samsung", "nokia", "iphone", "oppo");
$search = $_POST[$array];
if(in_search("oppo", $array)){
    $kq = "da tim thay";
}else{
    $kq = "khong tim thay";
}
?>

</body>
</html>
