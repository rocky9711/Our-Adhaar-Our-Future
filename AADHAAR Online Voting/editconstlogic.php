<?php
include "connection.php";
$s="update constituency set const_name='".$_POST["txt2"]."', population=".$_POST["txt3"].", wards='".$_POST["txt4"]."',state='".$_POST["state"]."' where const_id=".$_POST["txt1"];
mysqli_query($conn,$s);
header("location:consttable.php?state=".$_REQUEST['state']);