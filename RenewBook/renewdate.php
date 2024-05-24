<?php 
error_reporting(0);
// Database connection parameters
$servername = "localhost";
$username = "root";  
$password = ""; 
$database = "books";  

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Date = $_GET['dt'];
$cardnum = $_GET['cardnum'];

$query = "UPDATE logindata
SET Date = DATE_ADD('$Date', INTERVAL 7 DAY)
WHERE cardnumber = $cardnum;";


$result = $conn->query($query);

if ($result) {
    echo"<font color='green'>Renew Book Successfully";
} else {
    echo"<font color='red'>Failed to Renew Book";
}

$conn->close();


?>