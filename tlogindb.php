<html>
    <head>
         <link rel="stylesheet" href="cssfile..css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  //echo"$username $password";
  include 'connection.php';
  $sql="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
      while($row=$result->fetch_assoc())
      {
          session_start();
          $_SESSION['ausername']=$username;
          $_SESSION['apassword']=$password;
          echo"<meta http-equiv='refresh' content='0;tsinfo.php'>";
      }
  }
  else{
      echo"<script>alert('Invalid username or password')</script>";
      echo"<meta http-equiv='refresh' content='0;index.php'>";
      
  }
  //echo $sql;
  
  
}
else{
    header("location:index.php");
}
?>
    </body>
</html>