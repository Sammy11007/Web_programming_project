<html>
<body>
<?php 
$con=mysql_connect("localhost","root"," ");
mysql_select_db("login") or die("Error");
$a=$_POST["s1"];
$b=$_POST["s2"];
$c=$_POST["s3"];
$d=$_POST["s4"];
$e=$_POST["s5"];
$f=$_POST["s6"];
$g=$_POST["s7"];
$h=$_POST["s8"];
$i=$_POST["s9"];

$j=$_POST["s10"];
$k=$_POST["s11"];
$l=$_POST["s12"];
$m=$_POST["s13"];
$n=$_POST["s14"];

$o=$_POST["s15"];
$p=$_POST["s16"];
$q=$_POST["s17"];
$r=$_POST["s18"];

$s=$_POST["sugg1"];

$que=" insert into feed2 values('$s')";
$res=mysql_query($que);
if(!$res)
	print "Error";
else
	print "Inserted Successfully";



?>