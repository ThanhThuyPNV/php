createdb
<?Php 
// Create database
$mysqli = new mysqli("localhost", "root", "");
// Check connection
if ($mysqli === false){
    die("ERROR: Could not connect". $mysqli->connect_error);
}
$sql = "CREATE DATABASE demo1";

if($mysqli->query($sql) === true){
    echo "Database createed successfuly";
}else{
    echo "ERROR: Could not able to  excute $sql".$mysqli->connect_err;
}
// Close conection
$mysqli->close();

?>