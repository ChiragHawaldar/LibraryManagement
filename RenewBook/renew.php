<!DOCTYPE html>
<html lang="en">
<head>
    <title>Renew Book</title>
    <link rel="stylesheet" href="renew.css">
</head>
<body>
    <table border="2" cellspace="7"  cellpadding="10" align="center">
        <tr>
            <th>Class</th>
            <th>Card Number</th>
            <th>Date</th>
            <th>Renew Date</th>
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

$query = "select * from logindata";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
   
    while ($result=mysqli_fetch_assoc($data)) {
    echo " <tr>
        <td>".$result['Class']."</td>
        <td>".$result['cardnumber']."</td>
        <td>".$result['Date']."</td>
        <td><a href = 'renewdate.php?dt=$result[Date]&cardnum=$result[cardnumber]' >Renew Book</a></td>
      
      
        </tr>";
    }
}else{
    echo "No Data";
}



?>
    </table>
</body>
</html>
