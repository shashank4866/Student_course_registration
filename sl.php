<html>
<head>
    <link rel="stylesheet" href="cssfile.css">
</head>
<body>
<center>
<h1 style="color:white">STUDENT LOGIN</h1>
</center>
<div class="oval1">
    <li> <a class="link1" href="index.php" style="color:white;"> HOME</a></li>
<li><a class="link2" href="sl.php" style="color:white;">STUDENT LOGIN</a></li>
<li><a class="link3" href="index.php" style="color:white;">LOGOUT</a></li>
</div>
<center>
<div class="box">
    <form action="stlodb.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
             <input type="submit" class="btn" value="LOGIN" name="login">
</form>
</center>
<div>
</body>
</html>