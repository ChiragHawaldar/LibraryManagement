<!DOCTYPE html>
<html lang="en">
<head>
    <title>History</title>
    <link rel="stylesheet" href="history.css">
 
</head>
<body>

<div class="aline-center">
<table border="2" cellspace="7"  cellpadding="10"  >
        <tr>
            <th >CardNum</th>
            <th colspan="2">Class</th>
        </tr>

<?php 


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

$query = "select * from History";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
   
    while ($result=mysqli_fetch_assoc($data)) {
    echo " <tr>
    <td align='center'>".$result['cardnumber']."</td>
        <td>".$result['Class']."</td>
        </tr>";
    }
}else{
    echo "No Data";
}











?>
    </table>
</div>
</body>
</html>