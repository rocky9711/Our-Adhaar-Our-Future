<?php
include "connection.php";
$s="select * from const_login";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

//echo $num;

if($num==0)
{
    $id=10000;
}
else
{
    $max="select MAX(id) as loginid from const_login";
    $maxresult=mysqli_query($conn,$max);
    $maxrow=mysqli_fetch_array($maxresult);
    $id=$maxrow['loginid'];
    $id=$id+1;
}
$q="select * from const_login where email='".$_POST["email"]."'";
$r=mysqli_query($conn,$q);
$n=mysqli_num_rows($r);
if($n==0)
{
    $s="insert into const_login VALUES ($id,".$_POST["constid"].",'".$_POST["email"]."','".$_POST["name"]."',".$_POST["mob"].",'".$_POST["password"]."')";
    mysqli_query($conn,$s);
    header("location:addconst_login_success.php");
}
else
{
    header("location:addconst_login_fail.php");
}
