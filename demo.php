<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watcher_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT client.name FROM contents, contents_to_contacts, contacts WHERE content.id = '1267' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["client.name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>