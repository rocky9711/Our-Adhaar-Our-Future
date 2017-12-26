<?php
session_start();
$s="select * from admin";
include "connection.php";
$x=0;
$result=mysqli_query($conn,$s);
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST["txt1"] && $row[1]==$_POST["txt2"] && $row[3]==$_POST["sell"])
    {
        $x=1;
        break;
    }
}
if($x==1)
{
    $_SESSION["admin"]=$_POST["txt1"];
    header("location:adminhome.php");
}else
    header("location:adminlogin.php?er=1");