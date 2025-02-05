<html>
    <head>
        <link rel="stylesheet" href="cssfile.css">
    </head>
    <body>
        <center>
        <h1 style="color:white">BCOM </h1>
    </center>
    <div class="oval">
  
<li>
    <a class="active" href="index.php" style="color:white;">HOME</a></li><br><br>
</div>
    <center>
          <h2>APPROVAL STATUS</h2>
        <center>
    <table border="2px" bgcolor="yellow">
        <tr>
        <th>approval</th>
        </tr>
        <tr>
            <td>
<?php
$conn = new mysqli('localhost', 'root', '', 'admission');

if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$id = $_POST['nnn'];

$query = "SELECT * FROM bcom WHERE roll_number = '$id'";
$result = $conn->query($query);
if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo   $row['approval'] . "<br>";
} else {
    echo "No data found.";
}

$conn->close();

?>
                 </td>
        </tr>
    </center>
    </center>