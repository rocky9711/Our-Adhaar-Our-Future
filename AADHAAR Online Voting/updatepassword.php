<?php
include "connection.php";
$s="update admin set password=".$_POST["txt3"]." where email='".$_POST["txt1"]."'";
$x=0;
$q="select * from admin";
$result=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST["txt1"] && $row[1]==$_POST["txt2"])
    {
        $x=1;
        break;
    }
}
if($x==1)
{
    mysqli_query($conn,$s);
    header("location:confirmchange.php");
    //echo "Exists";
}
else
    header("location:changepassword.php?er=1");