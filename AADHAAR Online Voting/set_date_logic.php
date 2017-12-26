<?php
include "connection.php";
$date=$_POST['dat'];
//echo $date;
//echo date("d-m-Y");
$q="delete from voting_date where 1";
mysqli_query($conn,$q);
$s="insert into voting_date VALUES ('".$_POST["dat"]."')";
mysqli_query($conn,$s);
header("location:adminhome.php");