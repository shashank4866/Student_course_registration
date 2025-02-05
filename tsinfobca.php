
<?php
include 'connection.php';
$stmt = $conn->prepare("SELECT * FROM bca WHERE approval = 'Not Approved'");
$stmt->execute();
        ?>

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
    <div class="oval2">
        <li>  <a class="link1" style="color:white" href="index.php">home</a></li>
          <li>  <a class="link1" style="color:white" href="attendenceBCA.php">Attendence</a></li>
    </div>

    
    <div class="c">
    <table bgcolor="yellow" border="3" align="center">
        <thead>
        <tr>
            <th>ID</th>
            <th>STUDENT NAME</th>
            <th>PH NO</th>
            <th>EMAIL</th>
            <th>APPROVAL</th>
            <th>SUBMIT</th>
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
            <td><?php echo $row['roll_number']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><?php echo $row['email']; ?></td>
           <?php echo "<td><form action='chebca.php' method='post' >
                <input type='checkbox' name='approve[]' value='".$row['roll_number']."'> approve
                    <input type='hidden' name='all_students[]' value='".$row['roll_number']."'>
                
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
    </div>
    <a class="link1" style="color:white"; href="finalbca.php">before submiting to know table click here</a>
</body>
</html>