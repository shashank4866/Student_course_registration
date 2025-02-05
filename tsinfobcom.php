

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
        tr:hover {
    background-color: #f1f1f1;
}
    </style>
</head>
<body >
    <h1 style="color:white" align="center">ADMIN PAGE</h1>
     <div class="oval2">
         
         <li>  <a class="link1" style="color:white" href="index.php">home</a></li><br>
          <li>  <a class="link1" style="color:white" href="attendencebcom.php">Attendence</a></li>
        
    </div>
    
    <table bgcolor="white" border="10 solid" align="center">
        <thead>
        <tr>
            <th>ID</th>
            <th>STUDENT NAME</th>
            <th>PH NO</th>
            <th>EMAIL</th>
              <th>ADDRESS</th>
            <th>APPROVAL</th>
            <th>SUBMIT</th>
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
           <?php echo "<td><form action='chebcom.php' method='post' >
                <input type='checkbox' name='approve[]' value='".$row['roll_number']."'> approve
                
    </td>";
           ?>
 <?php   echo "<td>
    <input type='submit' name='submit' value='submit' class='btn'>
</form>
            </td>";

   echo     "</tr>";
   ?>
        
        <?php
        }
    }
    else{
    
        echo "no recorde found";
    }    
    ?>
        </tbody>
            
       
    </table>
      <a class="link1" style="color:white"; href="finalbcom.php">before submiting to know table click here</a>
</body>
</html>