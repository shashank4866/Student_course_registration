<html>
<head>
     <link rel="stylesheet" href="cssfile.css">
<title>REGISTER PAGE</title>
<style>
.box{
display:box;
border:10px solidgray;
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
    <h1 style="color:white"> please fill the below form for registration</h1>
    </center>
<div class="oval1">
  <a class="link1" href="index.php" style="color:white;">HOME</a></li>
<li><a class="link2" href="index.php" style="color:white;">LOGOUT</a></li>
</div>
<center>
<div class="box">
    <form action="bcom1.php" method="POST">
<label for="name"> STUDENT Name:</label>
<input type="text"   placeholder=" enter name" align="center" id="name" name="na" required><br><br>
<label for="phone number">PH NO:</label>
<input type="phno"  placeholder=" enter phone number" align="center" id="name" name="phn" required><br><br>
<label for="name">EMAIL:</label>
    <input type="email"  placeholder=" enter email" align="center" id="name" name="mail" required><br><br>
    <label for="ADRRESS"  name="add">ADDRESS:</label><br>
     <input type="text"  placeholder=" enter addess" align="center"  id="address" name="ad" required><br><br>
   <input  class="btn" type="submit" value="Submit">
</form>
</center>
<p  style="color:white";>Already appleid ? <a  style="color:red"; href="inn2.php">click here</a>.</p>
</div>

</body>
</html>