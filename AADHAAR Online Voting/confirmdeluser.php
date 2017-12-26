<?php
include "connection.php";
$s="delete from admin where email='".$_POST["email"]."'";
mysqli_query($conn,$s);
header("location:viewusers.php");