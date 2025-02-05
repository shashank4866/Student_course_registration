<?php  
include 'connection.php';
            if (isset($_POST['submit'])) {
    // Get checkbox values
    $approvals= $_POST['approve'];
      foreach($approvals as $approval){
        $query = "INSERT INTO approval(approval) VALUES ('$approval')";
      }
    echo "<meta http-equiv='refresh' content='0;finalbca.php'>";
            }else{
                  echo "<meta http-equiv='refresh' content='0;tsinfobca.php'>";
            }
    mysql_close($conn) ;

?>