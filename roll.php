<html>
    <head>
         <link rel="stylesheet" href="cssfile.css">
    </head>
    <body>
    <center>
        <h1>BCA </h1>
    </center>
    <div class="oval">
  
<li>
    <a class="active" href="index.php" style="color:white;">HOME</a></li>
    </div><center>
    <h2> STUDENT ID<h2>
            </center>
<table bgcolor="yellow" border="2" align="center">
        <thead>
        <tr>
            <th>NAME</th>
            <th>ID</th>
            
        </tr>
        </thead>
        <tbody>
        <?php 
    $conn =mysqli_connect("localhost","root","","admission");
    $query = "SELECT * FROM bca";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            ?>
            <tr>
                <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['roll_number']; ?></td>
            
         
        </tr>
        
        <?php
        }
    }
    else{
    
        echo "no recorde found";
    }    
    ?>
        </tbody>
            
       
    </table>
    <h3>NOTE*your ID will be display on the last column if you registerd know</h3>
</body>
</html>
        