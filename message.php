<html>
<body>
<?php 
$con=mysql_connect("localhost","root");
mysql_select_db("login") or die("Error");
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$que=" insert into contact values('$name','$email','$message')";
mysql_query($que,$con) or die(MySql_error($con));
header("Location: index.html");
?>
</body>
</html>