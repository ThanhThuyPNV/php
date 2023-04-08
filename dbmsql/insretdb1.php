<?php 
// Create database
$mysqli = new mysqli("localhost", "root", "", "demo1");
// Check connection
if ($mysqli === false){
    die("ERROR: Could not connect". $mysqli->connect_error);
}

$sql = "INSERT INTO person (First_name, Last_name, Email) values
('Bui', 'Thuy', 'buithithanhthuy@gmail.com'),
('Le', 'Sang', 'sangle12@gmail.com'),
('Hoang', 'Lam', 'Lamhoangvan@gmail.com'),
('Tran', 'Ngoc', 'ngoctran@gmail.com')";

if($mysqli->query($sql) === true){
    echo "Database createed successfuly";
}else{
    echo "ERROR: Could not able to  excute $sql".$mysqli->connect_err;
}
// Close conection
$mysqli->close();

?>