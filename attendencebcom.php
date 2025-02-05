<html>
    <head>
        <link rel="stylesheet" href="cssfile.css">
          <style>
        tr:hover {
    background-color: #f1f1f1;
}
</style>
    </head>
    <body>
        <h1 style="color:white" align="center"> BCOM ATTENDANCE</h1>
        <div class="oval">
          <li>  <a class="link1" style="color:white" href="index.php">home</a></li>
          </div>
        <div class="c">
                 
              <table bgcolor="white" border="2px" align="center">
                  <th>ROLL NUMBER</th>
                  <th>NAME</th>
                  <th>APPROVAL</th>
                  <th>ATTENDANCE</th>
                  <th>SUBMIT</th>
                  <?php
                  include 'connection.php';
                  $query="SELECT * FROM bcom";
                   $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            ?>
            <tr>
            <td><?php echo $row['roll_number']; ?></td>
            <td><?php echo $row['username']; ?></td>
               <td><?php echo $row['approval']; ?></td>
            <?php echo "<td><form action='approvebcom.php' method='post' >
                <input type='checkbox' name='approve[]' value='".$row['roll_number']."'> attendence
                
    </td>";
           ?>
            <?php   echo "<td>
    <input type='submit' name='submit' value='submit' class='btn'>
</form>
            </td>";
            ?>
          <?php
        }
    }
    else{
    
        echo "no recorde found";
    }    
    ?>
            </form>
              </table>
                     <center>
            
                     </center>
            </div>
    </body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

