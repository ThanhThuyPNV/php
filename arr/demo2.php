<?php 
$animals_list = array ("Lion", "Wolf", "Dog", "Cat");
foreach ($animals_list as $array_values){
    echo "<h3>".$array_values."<br>";
}
for($i=0; $i<count($animals_list); $i++){
    echo $animals_list[$i];
    echo "<br>";
}
?>