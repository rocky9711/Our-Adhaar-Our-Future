<?php
include "connection.php";
$s="delete from constituency where const_id=".$_REQUEST["txt1"];
$st=$_REQUEST["state"];
mysqli_query($conn,$s);
header("location:consttable.php?state=".$st);