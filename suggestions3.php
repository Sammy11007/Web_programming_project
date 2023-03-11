<html>
<body>
<?php 
$con=mysql_connect("localhost","root");
mysql_select_db("login") or die("Error");
$suggestion=$_POST["sugg1"];
$author=$_POST["n3"];
$book=$_POST["n2"];
$que=" insert into suggestion3 values('$suggestion','$author','$book')";
mysql_query($que,$con) or die(MySql_error($con));
header("Location:wpage3.html");
?>
</body>
</html>