<?php
include "connection.php";
$s="update admin set first_name='".$_POST["first"]."',type='".$_POST["sell"]."' where email='".$_POST["email"]."'";
mysqli_query($conn,$s);
header("location:viewusers.php");