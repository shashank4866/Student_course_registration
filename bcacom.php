<html>
    <head>
         <link rel="stylesheet" href="cssfile..css">
        <style>
            .c{
                color:black;
                padding:25px;
                margin:25px 50px 75px 100px;
                border:5px solid gray;
            }
        </style>
    </head> 
      <a class="link1" href="index.php" style="color:white;">HOME</a></li>
    <body>
        <h1>kbfkhdf</h1>
        <div class="c">
            <center>
<?php 
    $conn =mysqli_connect("localhost","root","","admission");
    $query = "SELECT * FROM bca";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            ?>
           
            <?php echo $row['roll_number']; ?><br>
            <?php echo $row['username']; ?><br>
            <?php echo $row['phone_number']; ?><br>
            <?php echo $row['email']; ?><br>
       
        
        <?php
        }
    }
    else{
    
        echo "no recorde found";
    }    
    ?>
            <input type="checkbox" name="gen">
            <button onclick="alert('Approved by admin!')">Submit</button></td>
            </center>
    </div>
    </body>
</html>