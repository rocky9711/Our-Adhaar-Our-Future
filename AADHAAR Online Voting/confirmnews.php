<!doctype html>
<html>
<head></head>
<body>
<?php
include "connection.php";

$s="insert into addnews values(null,'".$_POST["title"]."','".$_POST["des"]."','".$_POST["dat"]."')";
mysqli_query($conn,$s);
header("location:news_succes.php");

?>
</body>
</html>