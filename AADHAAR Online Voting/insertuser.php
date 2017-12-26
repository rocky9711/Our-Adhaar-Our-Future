<?php
include "connection.php";
$s="insert into admin values('".$_POST["email"]."','".$_POST["password"]."','".$_POST["first"]."','".$_POST["sell"]."')";
$q="select * from admin";
$x=0;
$result=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST["email"])
    {
        $x=1;
        break;
    }
}
if($x==1)
header("location:add_newadmin.php?er=1");
else {
    mysqli_query($conn, $s);
    header("location:confirmadd.php");
}