<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../contactus/ContactUs.css">

    <link rel="stylesheet" href="addbook.css">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">
        <div class="Headline-wrapper">
            <div class="heading-container">

                <h2>Book Details</h2>
                <p>Add details of book</p>

                <div class="row">
                    <ul id="list-container">
                        <!-- Existing or dynamically added list items will go here -->
                    </ul>
                </div>

            </div>
            <form method="post" action="#">
                <div class="ContactUs-details">
                    <div class="basic-details">
                        <input class="Property-address" type="text" name="bookName" placeholder="Enter Book Name"
                            id="input-box">
                        <input type="text" name="bookNum" placeholder="Enter Book Number" id="bookNo">
                    </div>
                    <button class="btn" id="SubmitBtn" onclick="addTask()">Add Book</button>
                </div>
            </form>
        </div>
    </div>


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


// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$ClassName = $_POST['bookName'];
$CardNum = $_POST['bookNum'];

   // Check if bookName or bookNum is empty
   if ($ClassName == '' || $CardNum == '') {
    echo "Enter Book name and number";
    } else {
    // Prepare and execute the SQL INSERT statement
    $sql = "INSERT INTO logindata ( `Class`, `cardnumber`) VALUES ('$ClassName', '$CardNum')";
    $sql1 = "INSERT INTO History ( `Class`, `cardnumber`) VALUES ('$ClassName', '$CardNum')";
    
    if ($conn->query($sql) === TRUE) {
        // echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if ($conn->query($sql1) === TRUE) {
        // echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

}


// Close the database connection
$conn->close();
?>





    <script src="addbook.js"></script>


</body>

</html>