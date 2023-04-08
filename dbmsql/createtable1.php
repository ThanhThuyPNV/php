<?php 
// Create database
$mysqli = new mysqli("localhost", "root", "", "demo1");
// Check connection
if ($mysqli === false){
    die("ERROR: Could not connect". $mysqli->connect_error);
}

$sql = "CREATE TABLE person(
    ID int not null primary key auto_increment,
    First_name varchar(30) not null,
    Last_name varchar(30) not null,
    Email varchar(30) not null unique
)";
if($mysqli->query($sql) === true){
    echo "Database createed successfuly";
}else{
    echo "ERROR: Could not able to  excute $sql".$mysqli->connect_error;
}
// Close conection
$mysqli->close();

?>