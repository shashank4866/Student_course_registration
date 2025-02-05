<?php
include 'connection.php';
if(isset($_GET['roll_number'])){
    $roll_number=$GET['roll_number'];
    $delete= mysqli_query($conn,"DELETE FROM `bca` WHERE `roll_number`='$roll_number' ");
    header("location:finalbca.php");
}
$select="select * from bca";
$query=mysqli_query($conn,$select);
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
    <div class="oval">
        <li>  <a class="link1"  style="color:white" href="index.php">home</a></li>
    </div>
    <table  width="75px" border="3" bgcolor="yellow" align="center">
        <thead>
        <tr>
            <th>ID</th>
            <th>STUDENT NAME</th>
            <th>PH NO</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>APPROVAL</th>
            <th>OPERATIONS</th>
      
        </tr>
        </thead>
        <tbody>
        <?php
   $num=  mysqli_num_rows($query);
   if($num>0){
       while($result=mysqli_fetch_assoc($query)){
           
            echo"
            <tr>
            <td>".$result['roll_number']."</td>
            <td> ".$result['username']."</td>
            <td>".$result['phone_number']."</td>
            <td>".$result['email']."</td>
            <td>".$result['adress']."</td>
            <td>".$result['approval']."</td>
            <td><a href='finalbca.php? ".$result['roll_number']." 'class='btn'>Delete</a>
            </td>
            </tr>
            ";
              
        }
        }
        
// Close connection
mysqli_close($conn);
?>


        </tr>
        
     
        </tbody>
            
       
    </table>
</body>
</html>