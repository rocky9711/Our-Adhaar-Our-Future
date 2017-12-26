<?php
include "connection.php";
$s="insert into constituency values(null,'".$_POST["constname"]."',".$_POST["pop"].",'".$_POST["ward"]."','".$_POST["state"]."')";
mysqli_query($conn,$s);
header("location:confirmconst.php");