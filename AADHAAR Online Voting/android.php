<?php
include "connection.php";
$s="select name from voter where adhaar=".$_REQUEST["adhaar"];
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
echo $row[0];