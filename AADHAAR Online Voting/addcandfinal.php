<?php
include "connection.php";
$cpicname=$_REQUEST["cpicname"];
$cpictemp=$_REQUEST["cpictemp"];
$ppicname=$_REQUEST["ppicname"];
$ppictemp=$_REQUEST["ppictemp"];
$cpath="candimages/".$cpicname;

$ppath="electionsymbols/".$ppicname;

$s="insert into candidate VALUES(null,'".$_POST["cname"]."','".$_POST["fname"]."','".$cpath."','".$_POST["email"]."',".$_POST["mob"].",'".$_POST["haddress"]."','".$_POST["oaddress"]."','".$ppath."','".$_POST["party"]."','".$_POST["cons"]."','".$_POST["state"]."',0)";
echo $s;
mysqli_query($conn,$s);
header("location:candsuccess.php");
