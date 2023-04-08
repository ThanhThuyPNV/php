<?php
$mysqli = new mysqli("localhost","root","","demo1");

if ($mysqli -> connect_error) {
    die("Error: Could not connect to database. " . $mysqli ->connect_error);
}

$sql = "SELECT * FROM person";

if ($result = $mysqli->query($sql)) {
    var_dump($result);
    if($result -> num_rows > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>First name</td>";
                echo "<td>Last name</td>";
                echo "<td>Email</td>";
             echo "</tr>";
        
         while ( $row = $result ->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" .  $row['id'] . "</td>";
                echo "<td>" .  $row['first_name'] . "</td>";
                echo "<td>" .  $row['last_name'] . "</td>";
                echo "<td>" .  $row['email'] . "</td>";
            echo "</tr>";
         }
         echo "</table>";
         $result -> free();
    } else {
        echo "No records matching your query were found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

$mysqli -> close();
?>