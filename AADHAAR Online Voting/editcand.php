<?php
include "connection.php";

$cpicname=$_REQUEST["cpicname"];
$ppicname=$_REQUEST["ppicname"];

echo $cpicname;
echo $ppicname;
if($cpicname!="")
{
    $cpath="candimages/".$cpicname;
    $s="update candidate set cphoto='".$cpath."' where cand_id=".$_POST["id"];
    mysqli_query($conn,$s);
}
if($ppicname!="")
{
    $ppath="electionsymbols/".$ppicname;
    $s="update candidate set pphoto='".$ppath."' where cand_id=".$_POST["id"];
    mysqli_query($conn,$s);
}
$s="update candidate set cname='".$_POST["cname"]."',fname='".$_POST["fname"]."',email='".$_POST["email"]."',mob=".$_POST["mob"].",haddress='".$_POST["haddress"]."',oaddress='".$_POST["oaddress"]."',party='".$_POST["party"]."',const='".$_POST["cons"]."',state='".$_POST["state"]."' where cand_id=".$_POST["id"];
echo $s;
mysqli_query($conn,$s);
header("location:viewcandidate.php");