<html>
<head>
     <link rel="stylesheet" href="cssfile.css">
<title>REGISTER PAGE</title>
<style>
.box{
display:box;
border:15px solid;
justify-content:flex-middle;
background-color:skyblue;
padding:50px;
width:150px;
height:300px;
margin:25px 50px 150px 100px;
}
</style>
</head>
<body>
<center>
<h1 style="color:white">ENTER YOUR INFO</h1>
</center>
<div class="oval">
  
<li>
    <a class="active" href="index.php" style="color:white;">HOME</a></li>

</div>
<center>
<div class="box">
<form action="bca1.php" method="POST">
<label for="name"> STUDENT Name:</label>
<input type="text"   placeholder=" enter name" align="center" id="name" name="name" required><br><br>
<label for="phone number">PH NO:</label>
<input type="tel"  placeholder=" enter phone number" align="center" id="name" name="ph" maxlength="10" minlength="10" required><br><br>
<label for="name">EMAIL:</label>
    <input type="email"  placeholder=" enter email" align="center" id="name" name="mai" required><br><br>
    <label for="ADRRESS"  name="add">ADDRESS:</label><br>
     <input type="text"  placeholder=" enter addess" align="center"  id="address" name="add" required><br><br>
   <input class="btn" type="submit" value="Submit">
</form>
</center>
<p style="color:white";>Already appleid ? <a class="link1" style="color:red"; href="in.php">click here</a>.</p>
</div>

</body>
</html>