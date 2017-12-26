<?php
include "const_login_header.php";
$email=$_SESSION["constadmin"];
include "connection.php";


$p="<center><h1>Welcome ".$email;
$p=$p."<br>Constituency:".$_SESSION["constname"];

echo $p;
include "footer1.php";