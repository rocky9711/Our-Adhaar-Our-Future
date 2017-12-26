<?php
session_start();
$_SESSION["constadmin"]=NULL;
session_destroy();
header("location:index.php");