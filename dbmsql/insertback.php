<?php 
// Create database
$mysqli = new mysqli("localhost", "root", "", "demo1");
// Check connection
if ($mysqli === false){
    die("ERROR: Could not connect". $mysqli->connect_error);
}
$first_name = $mysqli->real_escape_string($_POST['first_name']);
$last_name = $mysqli->real_escape_string($_POST['last_name']);
$email = $mysqli->real_escape_string($_POST['email']);

$sql = "INSERT INTO person (First_name, Last_name, Email) values 
('$first_name', '$last_name', '$email')";


if($mysqli->query($sql) === true){
    echo "Database createed successfuly";
}else{
    echo "ERROR: Could not able to  excute $sql".$mysqli->connect_err;
}
// Close conection
$mysqli->close();
?>