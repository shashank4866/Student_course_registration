<?php
// Database connection settings
$host = 'localhost';
$dbname = 'admission';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$password = $_POST['psw'];
$phone = $_POST['phno'];
$email=$_POST['email'];

// Insert data into table
$query = "INSERT INTO student(name, password, phone_number,email) VALUES (?, ?, ?, ?)";
$smt = $conn->prepare($query);
$smt->bind_param("ssis", $name, $password, $phone, $email);
$smt->execute();

// Check if data inserted successfully
if ($smt->affected_rows == 1) {
      echo"<meta http-equiv='refresh' content='0;sl.php'>";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$smt->close();
$conn->close();
?>
