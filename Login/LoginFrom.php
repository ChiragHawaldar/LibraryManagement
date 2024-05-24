<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="LoginFrom.css">
    <script src="https://kit.fontawesome.com/77443e4491.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="form-box">
            <h1 id="title1" class="">Sign In</h1>
            <h1 id="title2" class="display">Sign Up</h1>

        
            <form  method="post" action="../index.html" >        <!-- action="../index.html" -->
                <div class="input-group">

                    <div class="input-field disable" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="Name" placeholder="Name">
                    </div>



                    <div class="input-field">
                        <i class="fa-solid fa-school"></i>
                        <input type="text" name="Class" placeholder="Class">         
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-list-ol"></i>
                        <input type="text" name="CardNum" placeholder="Card Number">
                    </div>
                    <div class="input-field disable " id="classField">
                        <i class="fa-solid fa-phone-flip"></i>
                        <input type="tel" placeholder="Phone number">
                    </div>
                    <div id="NewStudent" class="Acc-status">

                        <p id="NewStudent1" class="">New Student? <a>Click Here</a></p>
                        <p id="NewStudent2" class="display">Already have Account? <a>Click Here</a></p>
                    </div>
                </div>
                <div class="btn-field" id="BtnField">
                    <button type="submit" id="signinBtn" class="">Sign In</button>
                    <button type="submit" id="signupBtn" class="display">Sign Up</button>
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

$ClassName = $_POST['Class'];
$CardNum = $_POST['CardNum'];

   // Check if bookName or bookNum is empty
   if ($ClassName == '' || $CardNum == '') {
    echo "Enter Book name and number";
    } else {
    // Prepare and execute the SQL INSERT statement
    $sql = "INSERT INTO logindata values ( `Class`, `cardnumber`) VALUES ('$ClassName', '$CardNum')";
    
    if ($conn->query($sql) === TRUE) {
        // echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

}
// Close the database connection
?>


    <script src="LoginFrom.js"></script>
</body>

</html>