<?php
include "connection.php";
$s="delete from addnews where news_id=".$_GET["txt1"];
mysqli_query($conn,$s);
header("location:viewnews.php");