<?php
session_start();

include "connection.php";
$s="select * from voter where adhaar=".$_REQUEST["adhaar_id"]." or electno='".$_REQUEST["e_num"]."'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r) == 0)
{
    date_default_timezone_set("Asia/Kolkata");
    $dat=date('d-M-Y');
    $tim=date('h:i:s A');
    $plogin=$_SESSION["constadmin"];
    $q="select * from const_login where email='".$plogin."'";
//echo $q;
    $res=mysqli_query($conn,$q);
    $r=mysqli_fetch_array($res);
    $constid=$r[1];
    $s="insert into voter VALUES (null,".$_REQUEST["adhaar_id"].",'".$_REQUEST["e_num"]."','".$_REQUEST["name"]."','".$_REQUEST["fname"]."','".$_REQUEST["reason"]."',".$_REQUEST["mob"].",'".$_REQUEST["email"]."',".$_REQUEST["s_pin"].",".$_REQUEST["pin1"].",null,null,null,null,'".$dat."','".$tim."','".$plogin."',".$constid.",'N')";
    echo $s;
    mysqli_query($conn,$s);
    header("location:voter_registered.php?m=".$_REQUEST["mob"]."&p=".$_REQUEST["pin1"]."&e=".$_REQUEST["email"]."&nm=".$_REQUEST["adhaar_id"]);

}
else
{
    header("location:voter_register_failed.php");
}