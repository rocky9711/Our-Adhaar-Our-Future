<?php
include "connection.php";
$s="delete from const_login where id=".$_REQUEST["id"];
mysqli_query($conn,$s);
header("location:viewconst.php");