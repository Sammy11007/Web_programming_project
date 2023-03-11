<html>
<body>
<?php 
$con=mysql_connect("localhost","root");
mysql_select_db("login") or die("Error");
$suggestion=$_POST["sugg1"];
$cricket=$_POST["s1"];
$football=$_POST["s2"];
$basketball=$_POST["s3"];
$tennis=$_POST["s4"];
$badminton=$_POST["s5"];
$hockey=$_POST["s6"];
$tabletennis=$_POST["s7"];
$athletics=$_POST["s8"];
$swimming=$_POST["s9"];
$lackofequip=$_POST["res1"];
$poorquality=$_POST["res2"];
$poormaintainance=$_POST["res3"];
$outdated=$_POST["res4"];
$que=" insert into suggestions values('$suggestion','$cricket','$football','$basketball','$tennis','$badminton','$hockey','$tabletennis','$athletics','$swimming','$lackofequip','$poorquality','$poormaintainance','$outdated')";
mysql_query($que,$con) or die(MySql_error($con));
header("Location:wpages.html");
?>
</body>
</html>