<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daily Goals</title>
    <link rel="stylesheet" href="removeBook.css">
</head>
<body>

    <div class="container">
        <div class="todo-app">
            <h2>Remove Book</h2>
            <div class="row">
                <input type="text" name="" id="input-box" placeholder="Add Your Text">
                <button onclick="removeTask()">Add</button>
            </div>
      
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
        <td align='center'>".$result['cardnumber']."</td>
        <td>".$result['Date']."</td>
        <td><a href = 'delete.php?dt=$result[cardnumber]' >Remove</a></td>
      
        </tr>";
    }
}else{
    echo "No Data";
}



?>
    </table>
            
        </div>
    </div>


















<script defer src="removeBook.js"></script>










</body>
</html>