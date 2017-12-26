<?php
include "connection.php";
$s="update const_login set email='".$_REQUEST["email"]."',off_name='".$_REQUEST["name"]."',mob=".$_REQUEST["mob"]." where id=".$_REQUEST["id"];
echo $s;
mysqli_query($conn,$s);
header("location:edit_login_success.php");