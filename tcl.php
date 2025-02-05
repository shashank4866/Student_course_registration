<html>
<head>
    <link rel="stylesheet" href="cssfile.css">
<style>
.box{
display:box;
border:10px solidgray;
justify-content:flex-middle;
background-color:skyblue;
padding:25px;
width:250px;
height:100px;
margin:25px 50px 75px 100px;
}

</style> 
</head>
<body>
<center>
    <h1 style="color:white">ADMIN LOGIN</h1>
</center>
<div class="oval">
<li><a href="sl.php" style="color:white;">ADMIN LOGIN</a></li>
</div>
<center>
<div  class="box">
    <form  action="tlogindb.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
             <input type="submit" class="btn" value="LOGIN" name="login">
</form>
</form>
</center>
<div>
</body>
</html>