<?php
include "connection.php";
$s="update const_login set password=".$_POST["txt3"]." where email='".$_POST["txt1"]."'";
$x=0;
$q="select * from const_login";
$result=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($result))
{
    if($row[2]==$_POST["txt1"] && $row[5]==$_POST["txt2"])
    {
        $x=1;
        break;
    }
}
if($x==1)
{
    mysqli_query($conn,$s);
    header("location:confirm_constpwd_change.php");
    //echo "Exists";
}
else
    header("location:const_change_pwd.php?er=1");