<html>
<body>
<?php 
$con=mysql_connect("localhost","root");
mysql_select_db("login") or die("Error");
$suggestion=$_POST["sugg1"];
$que=" insert into suggestions values('$suggestion')";
mysql_query($que,$con) or die(MySql_error($con));
header("Location:wpages2.html");
?>
</body>
</html>