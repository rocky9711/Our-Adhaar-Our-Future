<?php
include "connection.php";
$s="update addnews set news_title='".$_GET["txt2"]."',description='".$_GET["txt3"]."',dateofnews='".$_GET["txt4"]."' where news_id=".$_GET["txt1"];
mysqli_query($conn,$s);
header("location:viewnews.php");