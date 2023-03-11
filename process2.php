<html>
<body>
<?php 
$con=mysql_connect("localhost","root");
mysql_select_db("login") or die("Error");
$id=$_POST["id"];
$username=$_POST["username"];
$password=$_POST["password"];
$que=" insert into usersid values('$id','$username','$password')";
mysql_query($que,$con) or die(MySql_error($con));
header("Location:login.php");
?>
</body>
</html>