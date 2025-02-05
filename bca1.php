<html>
<head>
     <link rel="stylesheet" href="cssfile.css">
<style>
.c{
color:black;
padding:25px;
margin:25px 50px 75px 100px;
border:5px solid black;
}
</style>
</head>
<body >
<center>
    <h1>BCA </h1>
</center>
    <div class="oval1">
  
<li>
    <a class="link1" href="index.php" style="color:white;">HOME</a></li>
<li><a class="link2" href="index.php" style="color:white;">LOGOUT</a></li>
</div>
<div class="c">

<hr>
<table  bgcolor="yellow" id="attendance" border="1px">
<thead>
<tr>
<th>NAME</th>
<th>PHONE NUMBER</th>
<th>EMAIL</th>
<th>ADDRESS</th>
<th>DATE</th>

</tr>
</thead>
<tbody>
<?php
$username=$_POST ['name'];
$phone_number=$_POST ['ph'];
$EMAIL=$_POST ['mai'];
$address=$_POST ['add'];


echo "<tr>";
echo "<td>" .$username. "</td>";
echo "<td>" .$phone_number. "</td>";
echo "<td>" .$EMAIL. "</td>";
echo "<td>" .$address. "</td>";
echo "<td>" .date('d-m-y')."</td>";

echo "</tr>";

$conn=new mysqli('localhost','root','','admission');
if($conn->connect_error){
die('connection faild:'.$conn->connect_error);
}else{
$smt =$conn->prepare("insert into bca(username,phone_number,email,adress)values(?,?,?,?)");
$smt->bind_param("siss",$username,$phone_number,$EMAIL,$address);
$smt->execute();
$smt->close();
$conn->close();
}
?>
</tbody>
</table>
</form>
</div>
    <p>tO know your id? <a href="roll.php"> please click here</a>.</p>
</body>
</html>

