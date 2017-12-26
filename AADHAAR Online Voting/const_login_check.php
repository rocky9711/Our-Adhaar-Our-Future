<?php
session_start();
$s="select * from const_login";
include "connection.php";
$x=0;
$result=mysqli_query($conn,$s);
$cc="";
while($row=mysqli_fetch_array($result))
{
    if($row[2]==$_POST["txt1"] && $row[5]==$_POST["txt2"])
    {
        $q="select * from constituency where const_id=".$row[1];
        echo $q;
        $r=mysqli_query($conn,$q);
        $rr=mysqli_fetch_array($r);
        $cc=$rr[1];
        $x=1;
        break;
    }
}
if($x==1)
{
    $_SESSION["constadmin"]=$_POST["txt1"];
    $_SESSION["constname"]=$cc;
    //echo $_SESSION['constname'];
    header("location:const_login_home.php?q=".$cc);
}else
    header("location:constituencylogin.php?er=1");