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
<div class="c">
<h1>Bcom </h1>
<hr>
<table  bgcolor="yellow"  border="4px">
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
$username=$_POST ['na'];
$phone_number=$_POST ['phn'];
$EMAIL=$_POST ['mail'];
$address=$_POST ['ad'];


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
$smt =$conn->prepare("insert into bcom(username, phone_number,email,address)values(?,?,?,?)");
$smt->bind_param("siss",$username,$phone_number,$EMAIL,$address);
$smt->execute();
$smt->close();
$conn->close();
}
?>
</tbody>
</table>
</form>
</div
<p>tO know your id? <a href="roll2.php"> please click here</a>.</p>
</body>
</html>

