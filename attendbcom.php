<html>
<head>
     <link rel="stylesheet" href="cssfile.css">
</head>
<body >
    <h1 style="color:white" align="center">BCOM ATTENDANCE</h1>
    <div class="oval">
        <li>  <a class="link1"  style="color:white" href="index.php">home</a></li>
    </div>
    <table  width="75px" border="3" bgcolor="yellow" align="center">
        <thead>
        <tr>
            <th>ROLL NUMBER</th>
            <th>STUDENT NAME</th>
            <th>ATTENDANCE</th>
      
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
            <td><?php echo $row['attendance']; ?></td>
        </tr>
        <?php
          }
    }
    mysqli_close($conn);
    ?>

        </tr>
        
     
        </tbody>
            
       
    </table>
</body>
</html>