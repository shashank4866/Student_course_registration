
<html>
    
<head>
     <link rel="stylesheet" href="cssfile.css">
    <style>
        .c{
display:box;
border:10px solid;
justify-content:flex-middle;
background-color:skyblue;
padding:50px;
width:150px;
height:400px;
margin:25px 50px 150px 100px;
}
    </style>
</head>
<h1 style="color:white" align="center">STUDENT COURSE REGISTERTION</h1>

<div class="oval">
  
<li>
    <a class="active" href="index.php" style="color:white;">HOME</a></li><br><br>
</div>
<center>
<form action='stdregdb.php' method='POST'>
    <center>
  <div class="c">
    <h1>Registration</h1> 
<p>please fill in this form to create an account.</p>
<hr>

<label for="name"><b>name</b></label>
<input type="text" placeholder="Enter name" name="name" id="name" required>

<label for="psw"><b>password</b></label>
<input type="password" placeholder="Enter Password" name="psw" id="psw" required>

<label for="phno"><b>phone number</b></label>
<input type="phno" placeholder="Enter Phone number" name="phno" id="phno" required>

<label for="email"><b>email</b></label>
<input type="email" placeholder="Enter email" name="email" id="email" required>




<p>By creating an account you agree to our <a href="information.php">Terms & Privacy</a>.</p>
<input type="submit" value="Submit" class="btn">    
</form>
</center>
</div>
       
    <p style="color:white";>Already have an account? <a class="link1" style="color:red"; href="sl.php">Sign in</a>.</p>
    </html>