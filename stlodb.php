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
  $query="SELECT * FROM student WHERE name='$username' AND password='$password'";
  $result=$conn->query($query);
  if($result->num_rows>0)
  {
     
          echo"<meta http-equiv='refresh' content='0;reg.php'>";
  }
  else{
      echo"<script>alert('Invalid username or password')</script>";
      echo"<meta http-equiv='refresh' content='0;index.php'>";
      
  }
}
?>
    </body>
</html>