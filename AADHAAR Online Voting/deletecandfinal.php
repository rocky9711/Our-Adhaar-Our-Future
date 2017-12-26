<?php
include "connection.php";
$s="delete from candidate where cand_id=".$_POST["id"];
mysqli_query($conn,$s);
header("location:viewcandidate.php");