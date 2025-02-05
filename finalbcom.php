

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="cssfile.css">
    <title>Admin Page</title>
    <style>
        .registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.7;
}

.registerbtn:hover {
  opacity: 3;
}

    </style>
</head>
<body >
    <h1 style="color:white" align="center">ADMIN PAGE</h1>
     <table bgcolor="yellow" border="3" align="center">
        <thead>
        <tr>
            <th>ID</th>
            <th>STUDENT NAME</th>
            <th>PH NO</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>APPROVAL</th>
             <th>OPERATION</th>
      
        </tr>
        </thead>
        <tbody>
        <?php 
    $conn =mysqli_connect("localhost","root","","admission");
    $query = "SELECT * FROM bcom";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            ?>
            <tr>
            <td><?php echo $row['roll_number']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td> <?php echo $row['approval'];     ?> </td>
            <td><a href='finalbcom.php?' class='btn'>Delete</a>
            </td>
        </tr>
        <?php
          }
    }
    mysqli_close($conn);
    ?>
     
        </tbody>
            
       
    </table>
</body>
</html>