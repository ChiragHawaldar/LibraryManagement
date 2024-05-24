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
}else{
    // echo "Connected ";
}

$Date = $_GET['dt'];
$query="DELETE FROM logindata WHERE  cardnumber = '$Date'";

$data = mysqli_query($conn,$query);

if($date){
    echo"<font color='red'>Failed to delete record Deleted From Database>";
}else{
    
    echo"<font color='green'>Record Deleted From Database";
}


?>