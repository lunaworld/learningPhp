<?php
if(isset($_GET['submit'])) {
    $servername = "localhost";
    //127.0.0.1
    $username = "root";
    $password = "";
    $dbname = "demo";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
        $firstname = $_GET['fname'];
        $lastname = $_GET['lname'];
        $email = $_GET['email'];
        $sql = "INSERT INTO myguests (firstname, lastname, email)
        VALUES ('$firstname', '$lastname', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

}

?> 

<form method="GET" action="">
  <label for="fname">firstname:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">lastname:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <label for="lname">email:</label><br>
  <input type="text" id="email" name="email" ><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 
