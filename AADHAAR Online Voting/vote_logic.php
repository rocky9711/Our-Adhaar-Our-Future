<!doctype html>
<html>
<head></head>
<body>
<?php
session_start();
include "publicheader.php";

$cid=$_GET["cid"];
$voter=$_GET["q"];
$s="select * from voter where adhaar=".$_GET["q"];
include "connection.php";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$q="select * from candidate where cand_id=".$_GET["cid"];
$result1=mysqli_query($conn,$q);
$row1=mysqli_fetch_array($result1);
$row1[12]=$row1[12]+1;
date_default_timezone_set("Asia/Kolkata");
$dat=date('d-M-Y');
$tim=date('h:i:s A');
$q="update candidate set count=".$row1[12]." where cand_id=".$cid;
mysqli_query($conn,$q);
$row[18]="Y";
$s="update voter set `check`='Y',date_vote='".$dat."',cand_id=".$cid.",time_vote='".$tim."' where adhaar=".$voter;
mysqli_query($conn,$s);
echo "<center><h1>Thanks for Voting</h1><br><img src='img/ink.jpg' height='300px' width='700px'></center>";
$_SESSION["adhar"]=NULL;

?>
<img src=""
<?php
include "footer.php";

?>

</body>

</html>