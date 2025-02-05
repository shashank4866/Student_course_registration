<html>
    <head>
         <link rel="stylesheet" href="cssfile.css">
         <style>
         .c{
color:black;
padding:25px;
margin:25px 50px 75px 100px;
border:5px solid black;
}
</style>
    </head>
    <body>
    <center>
        <h1>BCOM</h1>
    </center>
        <div class="oval">
  
<li>
    <a class="active" href="index.php" style="color:white;">HOME</a></li><br><br>
</div>
    <div class="c">
        <h3 style="color:white" align="center"> BCOM STUDENTS ID</h3>
<table bgcolor="yellow" border="4px" align="center">
        <thead>
        <tr>
            <th>NAME</th>
            <th>ID</th>
            
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
    </div>
</body>
</html>
        